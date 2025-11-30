

use PW2;

CREATE TABLE `tbMidia` (
    `codigo` INT PRIMARY KEY AUTO_INCREMENT,
    `nome` VARCHAR(50) NOT NULL,
    `sinopse` VARCHAR(250) NOT NULL,
    `genero` ENUM('açao, aventura, comedia, drama, ficcao cientifica, fantasia, terror, romance, musical, suspense, documentario') NOT NULL,
    anoLanc INT NOT NULL,
    tipo ENUM('Filme', 'Serie') NOT NULL,
    clasInd VARCHAR(2) NOT NULL,
    episodio INT,
    CONSTRAINT chk_ano_4dig CHECK (anoLanc BETWEEN 0 AND 9999)
);

// Isso aq é para um carrosel que ta na pagina crud mas que deve estar na pagina inicial

CREATE TABLE situacoes (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome_situacao` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `situacoes` (`id`, `nome_situacao`) VALUES
(1, 'Ativo'),
(2, 'Inativo'),
(3, 'Análise');

CREATE TABLE slides (
  `id` int NOT NULL AUTO_INCREMENT,
  `imagem` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `situacao_id` int NOT NULL DEFAULT '2',
  PRIMARY KEY (`id`),
  KEY `situacao_id` (`situacao_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `slides` (`id`, `imagem`, `situacao_id`) VALUES
(1, 'banner_top_v1.jpg', 1),
(2, 'banner_top_v2.jpg', 1),
(3, 'banner_top_v3.jpg', 1);

ALTER TABLE `slides`
  ADD CONSTRAINT `slides_ibfk_1` FOREIGN KEY (`situacao_id`) REFERENCES `situacoes` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;