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
					FROM movie_trailers
					WHERE movie_id = :mid";

			$st = $this->dbcon->prepare($sql);

			$st -> execute(array(":mid" => $movie_id));
			
			$r = $st->fetchAll();

			return $r;
		}
	}