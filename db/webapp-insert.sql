--
-- Déchargement des données de la table `Products`
--

INSERT INTO `Products` (`id`, `name`, `description`, `price`) VALUES
(1, 'Raspberry Pi 4', 'Raspberry Pi 4 Modèle B 4 Go ARM-Cortex-A72 4 x 1,50 GHz, 4 Go de RAM, WLAN-AC, Bluetooth 5, LAN, 4 x USB, 2 x Micro HDMI', 58.44),
(2, 'Module 4 canaux 5V', 'SeeKool 5V 4 canaux Module de Relais Module pour Arduino UNO R3 Mega 2560 1280 DSP Arm PIC AVR STM32 Raspberry Pi', 6.09),
(3, 'Adaptateur USB3.0 Sata 3.5 Pouces', 'UGREEN USB Disque Dur Adaptateur USB 3.0 vers SATA III Câble USB 3.0 pour 2,5 3,5 Pouces HDD SSD Driver jusqu à 12To Supporte UASP', 12.9),
(4, 'Buzzer Alarme 12V', 'ICQUANZX 5 Pcs DC 3-24V 85dB Son Alarme Électronique Buzzer Noir 23 x 12mm', 7.99);


--
-- Déchargement des données de la table `Customers`
--

INSERT INTO `Customers` (`id`, `firstname`, `familyname`, `address`, `username`, `password`) VALUES
(1, 'George', 'Abitbol', '25 rue la plus classe\r\n00000 Monde', 'george', '288078ebd52ab91e351b6255e08d0e21'),
(2, 'Jean', 'Némar', '99 avenue de la discorde\r\n69999 Pas Lyon', 'colere', 'a94f3faf2fe941f162b6ebfe08ad395d'),
(3, 'Ema', 'Déproblaime', '1729 bd de la révolution\r\n12345 Bourg-les-jonq', 'ema', 'b1fa72e8af53b23a22551d89f3a7390d'),
(4, 'Emile', 'Bergin', '1729 bd de la révolution\r\n12345 Bourg-les-jonq', 'emile','$2y$10$AUf0y64NfBWbF/dCAETIqOBszJ6ibab3tmiHp6sN7nHCERE1hgSFe');


--
-- Déchargement des données de la table `Basket`
--

INSERT INTO `Basket` (`customer`, `product`, `quantity`) VALUES
(1, 4, 14),
(2, 1, 1),
(2, 2, 1);
