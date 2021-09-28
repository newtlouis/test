
﻿<?php
	require_once('fonctions.php');

	"CREATE TABLE arbre
		(id   INTEGER NOT NULL,
		idParent  INTEGER NOT NULL,
		name VARCHAR(16) NOT NULL)

		PRIMARY KEY (id),
		FOREIGN KEY (ParentId) references arbre(id), 
		";

		While(isset($Parents))
			$Parents = "SELECT * FROM arbre WHERE idParent == NULL";
			foreach($Parents as $parent){
				$Enfants = "SELECT * FROM arbre WHERE idParent == $Parent.id";
			}

			$Parents = $Enfants;

		""
		function get_enfant($idParent){
			$enfants = "SELECT * FROM arbre WHERE arbre.idParent = $idParent";
			foreach ($enfants as $enfant) {
				$petitEnfant = get_enfant($enfant['id'])
			# 
			}
		}
