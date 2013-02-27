<?php

	class trailersModel extends db{

		public function getTrailers(){
			$sql = "SELECT *
					FROM movie_trailers";

			$st = $this->dbcon->prepare($sql);

			$st -> execute();
			
			$r = $st->fetchAll();

			return $r;
		}

		public function getTrailer($movie_id = ""){
			$sql = "SELECT *
					FROM movie_trailers as mt
					JOIN video_paths as vp
					ON mt.movie_id = vp.movie_id
					WHERE mt.movie_id = :mid";

			/* SELECT *
			FROM movie_trailers as mt
			JOIN video_paths as vp
			ON mt.movie_id = vp.movie_id
			WHERE mt.movie_id = "512d1051dd813"; */

			$st = $this->dbcon->prepare($sql);

			$st -> execute(array(":mid" => $movie_id));
			
			$r = $st->fetchAll();

			return $r;
		}
	}