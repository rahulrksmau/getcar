-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2017 at 02:47 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `knit`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE IF NOT EXISTS `brand` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `logo` varchar(20) NOT NULL,
  `height` varchar(3) NOT NULL,
  `width` varchar(3) NOT NULL,
  `about` text NOT NULL,
  `review` float NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `name`, `logo`, `height`, `width`, `about`, `review`) VALUES
(1, 'Alfa Romeo', 'alfa.png', '100', '100', 'The company''s name is a combination of the original name, A.L.F.A. (Anonima Lombarda Fabbrica Automobili) and the last name of entrepreneur Nicola Romeo, who took control of the company in 1915.\r\nThe company that became Alfa Romeo was founded as Società Anonima Italiana Darracq (SAID) in 1906 by the French automobile firm of Alexandre Darracq, with some Italian investors. One of them, Cavaliere Ugo Stella, an aristocrat from Milan, became chairman of the SAID in 1909. The firm''s initial location was in Naples, but even before the construction of the planned factory had started, Darracq decided late in 1906 that Milan would be more suitable and accordingly a tract of land was acquired in the Milan suburb of Portello, where a new factory of 6,700 square metres (8,000 sq yd) was erected. Late 1909, the Italian Darracq cars were selling slowly and Stella, with the other Italian co-investors, founded a new company named A.L.F.A. (Anonima Lombarda Fabbrica Automobili), initially still in partnership with Darracq. The first non-Darracq car produced by the company was the 1910 24 HP, designed by Giuseppe Merosi, hired in 1909 for designing new cars more suited to the Italian market. Merosi would go on to design a series of new A.L.F.A. cars, with more powerful engines (40-60 HP). A.L.F.A. ventured into motor racing, with drivers Franchini and Ronzoni competing in the 1911 Targa Florio with two 24-hp models. In 1914, an advanced Grand Prix car was designed and built, the GP1914, with a four-cylinder engine, double overhead camshafts, four valves per cylinder, and twin ignition. However, the onset of the First World War halted automobile production at A.L.F.A. for three years.', 3.5),
(2, 'Audi', 'Audi.png', '120', '150', 'Audi is a German automobile manufacturer that designs, engineers, produces, markets and distributes luxury vehicles. Audi oversees worldwide operations from its headquarters in Ingolstadt, Bavaria, Germany. Audi-branded vehicles are produced in nine production facilities worldwide.', 4),
(3, 'Fiat', 'car_logo_PNG1637.png', '100', '100', 'FIAT  is an Italian automaker which produces Fiat branded cars, and is part of Fiat Chrysler Automobiles through its subsidiary FCA Italy S.p.A.., the largest automobile manufacturer in Italy. The company, Fiat Automobiles S.p.A., was formed in January 2007 when Fiat reorganized its automobile business, and traces its history back to 1899 when the first Fiat automobile was produced.', 3.8),
(4, 'BMW', 'car_logo_PNG1641.png', '100', '100', 'BMW, is a German luxury vehicles, motorcycle, and engine manufacturing company founded in 1916. Headquartered in Munich, Bavaria, Germany, it also owns and produces Mini cars and serves as the parent company of Rolls-Royce Motor Cars. BMW produces motorcycles under BMW Motorrad, and plug-in electric cars under the BMW i sub-brand. It is one of the best-selling luxury automakers in the world.\r\nBMW headquarters in Munich, Germany', 4),
(5, 'Chevrolet', 'car_logo_PNG1644.png', '80', '150', 'Chevy and formally the Chevrolet Division of General Motors Company, is an American automobile division of the American manufacturer General Motors (GM). Louis Chevrolet and ousted General Motors founder William C. Durant started the company on November 3, 1911 [2] as the Chevrolet Motor Car Company. Durant used the Chevrolet Motor Car Company to acquire a controlling stake in General Motors with a reverse merger occurring on May 2, 1918 and propelled himself back to the GM presidency. After Durant''s second ousting in 1919, Alfred Sloan, with his maxim "a car for every purse and purpose," would pick the Chevrolet brand to become the volume leader in the General Motors family, selling mainstream vehicles to compete with Henry Ford''s Model T in 1919 and overtaking Ford as the best-selling car in the United States by 1929.', 4.2),
(6, 'Ford', 'car_logo_PNG1666.png', '100', '150', 'The Ford Motor Company (commonly referred to simply as Ford) is an American multinational automaker headquartered in Dearborn, Michigan, a suburb of Detroit. It was founded by Henry Ford and incorporated on June 16, 1903. ', 4.1),
(7, 'Jaguar', 'car_logo_PNG1647.png', '100', '150', 'Jaguar Cars is the luxury vehicle brand of Jaguar Land Rover, a British multinational car manufacturer headquartered in Whitley, Coventry, England, owned by the Indian company Tata Motors since 2008.\r\n\r\nJaguar''s business was founded as the Swallow Sidecar Company in 1922, originally making motorcycle sidecars before developing bodies for passenger cars. Under the ownership of S. S. Cars Limited the business extended to complete cars made in association with Standard Motor Co many bearing Jaguar as a model name. The company''s name was changed from S. S. Cars to Jaguar Cars in 1945. A merger with the British Motor Corporation followed in 1966, the resulting enlarged company now being renamed as British Motor Holdings (BMH), which in 1968 merged with Leyland Motor Corporation and became British Leyland, itself to be nationalised in 1975.', 4.3),
(8, 'Hyundai', 'car_logo_PNG1645.png', '100', '150', 'The Hyundai Motor Company  is a South Korean multinational automotive manufacturer headquartered in Seoul, South Korea. The company was founded in 1967 and, along with its 32.8% owned subsidiary, Kia Motors, together comprise the Hyundai Motor Group, which is the world''s fifth largest automaker based on annual vehicle sales in 2012.[needs update] In 2008, Hyundai Motor (without Kia) was ranked as the eighth largest automaker. As of 2012, the Company sold over 4.4 million vehicles worldwide in that year,and together with Kia, total sales were 7.12 million.', 3.8),
(11, 'Mercedes', 'car_logo_PNG1655.png', '110', '150', 'Mercedes was a brand of the Daimler-Motoren-Gesellschaft (DMG). DMG began to develop in 1900, after the death of its co-founder, Gottlieb Daimler. Although the name was not lodged as a trade name until 23 June 1902 and not registered legally until 26 September, the brand name eventually would be applied to an automobile model built by Wilhelm Maybach to specifications by Emil Jellinek that was delivered to him on 22 December 1900. By Jellinek''s contract, the new model contained a newly designed engine designated "Daimler-Mercedes". This engine name is the first instance of the use of the name, Mercedes, by DMG. The automobile design would later be called, the Mercedes 35 hp.', 3.8),
(12, 'Toyota', 'toyota(1).png', '110', '150', 'Toyota Motor Corporation  is a Japanese automotive manufacturer headquartered in Toyota, Aichi, Japan. In March 2014 the multinational corporation consisted of 338,875 employees worldwide and, as of February 2016, is the 13th-largest company in the world by revenue. Toyota was the largest automobile manufacturer in 2012 (by production) ahead of the Volkswagen Group and General Motors. In July of that year, the company reported the production of its 200-millionth vehicle. Toyota is the world''s first automobile manufacturer to produce more than 10 million vehicles per year. It did so in 2012 according to OICA, and in 2013 according to company data. As of July 2014, Toyota was the largest listed company in Japan by market capitalization (worth more than twice as much as #2-ranked SoftBank) and by revenue.', 3.7),
(13, 'Volkswagen', 'car_logo_PNG1667.png', '100', '100', 'Volkswagen AG is a German car manufacturer headquartered in Wolfsburg, Lower Saxony, Germany. Established in 1937, Volkswagen is the top-selling and namesake marque of the Volkswagen Group, the holding company created in 1975 for the growing company, and is now the second-largest automaker in the world.', 4),
(14, 'Lamborghini', 'Lamborghini_Logo.png', '100', '100', 'Ferruccio Lamborghini, an Italian manufacturing magnate, founded Automobili Ferruccio Lamborghini S.p.A. in 1963 to compete with established marques, including Ferrari. The company gained wide acclaim in 1966 for the Miura sports coupé, which established rear mid-engine, rear wheel drive as the standard layout for high-performance cars of the era. Lamborghini grew rapidly during its first decade, but sales plunged in the wake of the 1973 worldwide financial downturn and the oil crisis. The firm''s ownership changed three times after 1973, including a bankruptcy in 1978. American Chrysler Corporation took control of Lamborghini in 1987 and sold it to Malaysian investment group Mycom Setdco and Indonesian group V''Power Corporation in 1994. In 1998.', 4.1);

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE IF NOT EXISTS `car` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `brand_name` varchar(20) NOT NULL,
  `class` varchar(25) NOT NULL,
  `Body Style` varchar(10) NOT NULL,
  `Layout` varchar(25) NOT NULL,
  `Engine` varchar(50) NOT NULL,
  `Transmission` varchar(50) NOT NULL,
  `Wheelbase` varchar(10) NOT NULL,
  `Length` varchar(10) NOT NULL,
  `Width` varchar(10) NOT NULL,
  `Height` varchar(10) NOT NULL,
  `Kerb Weight` varchar(20) NOT NULL,
  `price` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`id`, `name`, `brand_name`, `class`, `Body Style`, `Layout`, `Engine`, `Transmission`, `Wheelbase`, `Length`, `Width`, `Height`, `Kerb Weight`, `price`) VALUES
(1, 'Mi To', 'Alfa Romeo', 'it have to determine', '3-door hat', ' Front-engine, front-whee', ' 0.9 L TwinAir I2 t/c petrol ,1.4 L I4 petrol ,1.4', '5-speed manual,6-speed manual ,6-speed Dual Dry Cl', '2,511 mm (', '4,063 mm (', '1,721 mm (', '1,446 mm (', '1,080–1,205 kg (2,38', 450000),
(2, 'Giulietta', 'Alfa Romeo', 'Compact car / Small famil', '5-door hat', 'Front-engine, front-wheel', '1.4 L I4 t/c petrol/LPG,1.4 L I4 t/c petrol (Multi', '6-speed manual ,6-speed Dual Dry Clutch Transmissi', '2,634 mm (', '4,351 mm (', '1,798 mm (', '1,465 mm (', '1,355–1,395 kg (2,98', 551000),
(3, 'Giulia', 'Alfa Romeo', 'Compact executive car', '4-door sed', 'Front-engine, rear-wheel-', '2.9 L F154 V6 twin turbo petrol,2.0 L I4 turbo pet', '6-speed manual ,8-speed automatic', '2,820 mm (', '4,639 mm (', '1,873 mm (', '1,426 mm (', '1,374 kg (3,029 lb) ', 650000),
(4, 'Alfa Romeo 4C', 'Alfa Romeo', 'Sports car (S)', '2-door cou', 'Transverse mid-engine, re', '1.75 L 1750 turbocharged I4', '6-speed TCT (FPT C635) Dual Dry Clutch Transmissio', '2,380 mm (', '3,989 mm (', '2,090 mm', '1,864 mm (', '895 kg (1,973 lb) (d', 486000);

-- --------------------------------------------------------

--
-- Table structure for table `knit_project`
--

CREATE TABLE IF NOT EXISTS `knit_project` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Mname` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` int(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `pass` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `knit_project`
--

INSERT INTO `knit_project` (`id`, `name`, `Fname`, `Mname`, `gender`, `dob`, `email`, `mobile`, `pass`) VALUES
(2, 'rahul kumar', 'vlknsdv', 'ksjv', 'male', 1992, 'ashu.kakran@yahoo.co', '0789582184', '123456789'),
(4, 'anuj', 'aks', 'bds', 'male', 0, 'anuj@gmail.com', '7575752150', 'anuj1515'),
(16, 'rahul', 'sdi', 'vvs', 'male', 0, 'abc@xyz.com', '123548', '13235'),
(22, 'harshsharma', 'dvjsn', 'jnfaosn', 'male', 0, 'harsh@gmail.com', '8090501451', 'harshsharm'),
(25, 'harshsingh', 'ksdjv', 'ksdjvbs', 'male', 0, 'rkvns15@gmail.com', '1122', '12345');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
