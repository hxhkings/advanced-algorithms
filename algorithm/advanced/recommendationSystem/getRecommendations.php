<?php

	function getRecommendations(array $reviews, string $person): array {

		$calculation = [];

		foreach ($reviews as $reviewer => $restaurants) {
			$similarityScore = pearsonScore($reviews, $person, $reviewer);
			if ($person == $reviewer || $similarityScore <= 0) {
				continue;
			}

			foreach ($restaurants as $restaurant => $rating) {
				if (!array_key_exists($restaurant, $reviews[$person])) {
					if (!array_key_exists($restaurant, $calculation)) {
							$calculation[$restaurant] = [];
							$calculation[$restaurant]['Total'] = 0;
							$calculation[$restaurant]['SimilarityTotal'] = 0;
					}

					$calculation[$restaurant]['Total'] += $similarityScore * 
														$rating;
					$calculation[$restaurant]['SimilarityTotal'] += $similarityScore;
				}
			}
		}

		$recommendations = [];
		foreach ($calculation as $restaurant => $values) {
			$recommendations[$restaurant] = $calculation[$restaurant]['Total'] /
											$calculation[$restaurant]['SimilarityTotal'];
		}

		arsort($recommendations);
		return $recommendations;
	}


?>