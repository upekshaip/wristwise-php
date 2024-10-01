-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:8111
-- Generation Time: Oct 01, 2024 at 12:11 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `contactId` int(64) NOT NULL,
  `contactName` varchar(128) NOT NULL,
  `contactEmail` varchar(128) NOT NULL,
  `subject` varchar(128) NOT NULL,
  `message` varchar(512) NOT NULL,
  `date` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`contactId`, `contactName`, `contactEmail`, `subject`, `message`, `date`) VALUES
(6, 'asd', 'asd', 'asd', 'asdasdasd', '2023-07-31'),
(7, 'sss', 'ss@gmail.com', 'asdsss', 'asdasdasd asdsad asdadsa dazfgsdeg sg aegfsdg aedgf saedfg eg adf gsdg dg dsgfsg efg ewsgrf ssd gfd', '2023-07-31'),
(8, 'asd', 'asd@awd', 'asd', 'asd', '2023-08-17'),
(9, 'asd', 'asd@asdasd', 'asd', 'asdasd', '2023-08-19'),
(10, 'asd', 'asd@asd', 'asd', 'asd', '2024-08-25');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderId` int(32) NOT NULL,
  `date` date NOT NULL,
  `username` varchar(64) NOT NULL,
  `userId` int(32) NOT NULL,
  `productId` int(32) NOT NULL,
  `quantity` int(16) NOT NULL,
  `itemPrice` double NOT NULL,
  `status` varchar(128) NOT NULL,
  `productName` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productId` int(32) NOT NULL,
  `name` varchar(64) NOT NULL,
  `description` varchar(512) NOT NULL,
  `shortDescription` varchar(128) NOT NULL,
  `price` float NOT NULL,
  `discount` float NOT NULL,
  `availableCount` int(16) NOT NULL,
  `photo` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productId`, `name`, `description`, `shortDescription`, `price`, `discount`, `availableCount`, `photo`) VALUES
(100, 'Citizen Sport Luxury', 'Men luxury timepieces with technical advancements and a sporty style. 1 Second Chronograph Measures up to 60 Minutes, 12/24 Hour Time, Date. Silver-Tone Stainless Steel , Mineral Crystal', 'Citizen', 105000, 5, 20, 'https://wallpaperaccess.com/full/6324603.jpg'),
(200, 'Citizen Rolan AW', 'For the ultimate classic vintage style, the Rolan from Citizen features a 40mm gold-tone case made of stainless steel. The dial is an elegant champagne color, perfectly accented with the ash brown leather strap that rounds out the look. Advanced features include a day/date function, as well as Eco-Drive technology, so it is powered by light and will never require a battery.', 'Citizen', 92700, 0, 12, 'https://images.alphacoders.com/650/650260.jpg'),
(300, 'Citizen Promaster Tsuno', 'The 50th Anniversary edition Promaster Tsuno Chrono Racer is a high-performance timepiece with an undeniably distinct design. Inspired by the original Citizen Bullhead from 1973, the uncommon chronograph features a 45mm two-tone stainless steel case secured by a sleek brown leather strap. With a gold-tone dial, the layout design makes use of four black sub-dials accented with red hands to create a dynamic and sporty aesthetic.', 'Citizen', 80200, 15, 12, 'https://c1.wallpaperflare.com/preview/890/445/286/watch-time-leather-blue.jpg'),
(400, 'Citizen Edifice', 'Men luxury timepieces with technical advancements and a sporty style. 1 Second Chronograph Measures up to 60 Minutes, 12/24 Hour Time, Date. Silver-Tone Stainless Steel , Mineral Crystal', 'Citizen', 68000, 0, 4, 'https://c0.wallpaperflare.com/preview/417/57/242/wristwatch-clock-white-key.jpg'),
(500, 'Citizen Rolan AW', 'For the ultimate classic vintage style, the Rolan from Citizen features a 40mm gold-tone case made of stainless steel. The dial is an elegant champagne color, perfectly accented with the ash brown leather strap that rounds out the look. Advanced features include a day/date function, as well as Eco-Drive technology, so it is powered by light and will never require a battery.', 'Citizen', 55400, 0, 7, 'https://images.alphacoders.com/650/650260.jpg'),
(600, 'Citizen Tsuno-M550', 'The 20th Anniversary edition Promaster Tsuno Chrono Racer is a high-performance timepiece with an undeniably distinct design. Inspired by the original Citizen Bullhead from 1973, the uncommon chronograph features a 45mm two-tone stainless steel case secured by a sleek brown leather strap. With a gold-tone dial, the layout design makes use of four black sub-dials accented with red hands to create a dynamic and sporty aesthetic.', 'Citizen', 38200, 1.5, 31, 'https://c4.wallpaperflare.com/wallpaper/919/941/253/nokia-8800-sirocco-wristwatch-wallpaper-preview.jpg'),
(700, 'Rolex Submariner', 'For the first time in the legendary brand’s history, the Oyster case of the Submariner has been sized up from 40mm to 41mm. It may not seem like a significant change to amateur watch fans, but for true collectors, you know this is a big deal. Especially when talking about one of the most iconic, most highly celebrated, most recognizable watches the world over.', 'Rolex', 115000, 10, 3, 'https://wallpapercave.com/wp/wp8818769.jpg'),
(800, 'Rolex Daytona Oysterflex', 'The Rolex Daytona Oysterflex Ref. 116515LN with its captivating Chocolate Dial is a timepiece that exudes sophistication and sportiness in perfect harmony. Meticulously crafted by Rolex, this exceptional watch seamlessly combines luxurious aesthetics with cutting-edge technology, making it a coveted accessory for watch enthusiasts and connoisseurs alike.', 'Rolex', 98000, 15, 5, 'https://wallpaperaccess.com/full/8212429.jpg'),
(900, 'Rolex GMT Master 2', 'The Rolex GMT Master II 126711CHNR “Rootbeer” is rated water-resistant to depths up to 100 metres, but boasts a TripLock screw-down crown also found on Rolex Submariner models. The triple gasket system is extremely robust and secure, leading many to believe the GMT Master II can possibly reach depths greater than its listed specifications.', 'Rolex', 88500, 20, 2, 'https://www.teahub.io/photos/full/55-554029_free-photography-wallpaper-rolex-1-copy-watches.jpg'),
(1000, 'Rolex Explorer LN9000', 'For the first time in the legendary brand’s history, the Oyster case of the Submariner has been sized up from 40mm to 41mm. It may not seem like a significant change to amateur watch fans, but for true collectors, you know this is a big deal. Especially when talking about one of the most iconic, most highly celebrated, most recognizable watches the world over.', 'Rolex', 72500, 20, 5, 'https://dmzr5ikm7nos4.cloudfront.net/blog/wp-content/uploads/2018/10/13122903/Rolex-Explorer.jpg'),
(1100, 'Rolex - Air king', 'The Rolex Air-king Oysterflex Ref. 116515LN with its captivating is a timepiece that exudes sophistication and sportiness in perfect harmony. Meticulously crafted by Rolex, this exceptional watch seamlessly combines luxurious aesthetics with cutting-edge technology, making it a coveted accessory for watch enthusiasts and connoisseurs alike.', 'Rolex', 59990, 15, 7, 'https://wallpapercave.com/wp/wp2149266.jpg'),
(1200, 'Rolex Oyster', 'The Rolex Oyster is rated water-resistant to depths up to 100 metres, but boasts a TripLock screw-down crown also found on Rolex Submariner models. The triple gasket system is extremely robust and secure, leading many to believe the GMT Master II can possibly reach depths greater than its listed specifications.', 'Rolex', 43500, 20, 2, 'https://1.bp.blogspot.com/_04kZGR_ltmE/SvRnqAMWg-I/AAAAAAAAFCE/k_BkPFNesig/s800/114200nz_003.jpg'),
(1300, 'Seiko Vinciro MT5500-U', 'The Seiko Daytona Oysterflex Ref. 116515LN with its captivating Chocolate Dial is a timepiece that exudes sophistication and sportiness in perfect harmony. Meticulously crafted by Rolex, this exceptional watch seamlessly combines luxurious aesthetics with cutting-edge technology, making it a coveted accessory for watch enthusiasts and connoisseurs alike.', 'Seiko', 10300, 0, 3, 'https://www.seikowatches.com/global-en/-/media/Images/GlobalEn/Seiko/Home/products/kingseiko/KS_features1.jpg?mh=1125&mw=2000&hash=F965B039A15EC3C9F30DAD9196331088'),
(1400, 'Seiko Promaster Silver', 'The 50th Anniversary edition Promaster Tsuno Chrono Racer is a high-performance timepiece with an undeniably distinct design. Inspired by the original Seiko Bullhead from 1973, the uncommon chronograph features a 45mm two-tone stainless steel case secured by a sleek brown leather strap. With a gold-tone dial, the layout design makes use of four black sub-dials accented with red hands to create a dynamic and sporty aesthetic.', 'Seiko', 11200, 1.5, 12, 'https://www.seikowatches.com/global-en/-/media/Images/GlobalEn/Seiko/Home/products/kingseiko/KS_features2.jpg?mh=1125&mw=2000&hash=C89EB40EC1A958563B03623C16C45E85'),
(1500, 'Seiko Patek-Pillipie', 'The Seiko GMT Master II 126711CHNR “Rootbeer” is rated water-resistant to depths up to 100 metres, but boasts a TripLock screw-down crown also found on Seiko Submariner models. The triple gasket system is extremely robust and secure, leading many to believe the GMT Master II can possibly reach depths greater than its listed specifications.', 'Seiko', 12000, 5, 8, 'https://www.seikowatches.com/global-en/-/media/Images/GlobalEn/Seiko/Home/products/kingseiko/KS_features4.jpg?mh=1125&mw=2000&hash=588C4A2DE15547FA15357F85E156102F'),
(1600, 'Seiko Emit 2200', 'Men luxury timepieces with technical advancements and a sporty style. 1 Second Chronograph Measures up to 60 Minutes, 12/24 Hour Time, Date. Silver-Tone Stainless Steel , Mineral Crystal', 'Seiko', 20000, 10, 4, 'https://www.seikowatches.com/global-en/-/media/HtmlUploader/GlobalEn/Seiko/Home/products/kingseiko/special/110th_limited/asset/img/main.jpg'),
(1700, 'Seiko Zenith MTD45', 'For the ultimate classic vintage style, the Rolan from Seiko features a 40mm gold-tone case made of stainless steel. The dial is an elegant champagne color, perfectly accented with the ash brown leather strap that rounds out the look. Advanced features include a day/date function, as well as Eco-Drive technology, so it is powered by light and will never require a battery.', 'Seiko', 14700, 1.3, 0, 'https://www.seikowatches.com/global-en/-/media/Images/GlobalEn/Seiko/Home/products/kingseiko/SJE089_SJE091/SJE091_01.jpg?mh=1125&mw=2000&hash=534B05CDC0F3E528084751BADB207A98'),
(1800, 'Seiko chromalight', 'The Seiko Daytona Oysterflex Ref. 116515LN with its captivating Chocolate Dial is a timepiece that exudes sophistication and sportiness in perfect harmony. Meticulously crafted by Rolex, this exceptional watch seamlessly combines luxurious aesthetics with cutting-edge technology, making it a coveted accessory for watch enthusiasts and connoisseurs alike.', 'Seiko', 16000, 15, 7, 'https://www.seikowatches.com/global-en/-/media/Images/GlobalEn/Seiko/Home/products/5sports/brand-pc_top_5sports.jpg'),
(1900, 'Casio G-Shock GA', 'Venture into misty forests and magical landscapes with moody G-SHOCK colors styled for mystery.With bezels and bands crafted in mixed-color resins, these Mystic Forest watches feature a unique finish reminiscent of paint swirls in green and yellow, brown and orange.', 'Casio', 121200, 1.5, 5, 'https://e1.pxfuel.com/desktop-wallpaper/126/995/desktop-wallpaper-casio-watch-casio.jpg'),
(2000, 'Casio Enticer Gent’s MTP', 'The round watch face features a striking inset dial with handy day display for a touch of extra interest. Water resistance for daily use frees you from worry when washing up or out in the rain.', 'Casio', 100000, 2.5, 8, 'https://images.pexels.com/photos/158741/gshock-watch-sports-watch-stopwatch-158741.jpeg'),
(2100, 'Casio Vintage A17', 'Introducing the A171 Series of round-face, unisex timepieces.Uncluttered monotone coloring combines with middle-sized unisex designs that go great with a wide variety of styles.The bands feature a slide-type clasp that lets you easily adjust the band length without special tools.Features and functions include calendar and stopwatch capabilities, along with everyday wear water resistance and LED light illumination for easy reading in the dark.', 'Casio', 90000, 20, 3, 'https://images6.alphacoders.com/569/569586.jpg'),
(2200, 'Casio G-Shock 5A-FRC', 'Venture into misty forests and magical landscapes with moody G-SHOCK colors styled for mystery.With bezels and bands crafted in mixed-color resins, these Mystic Forest watches feature a unique finish reminiscent of paint swirls in green and yellow, brown and orange.', 'Casio', 73000, 1.5, 9, 'https://media.gq-magazine.co.uk/photos/62fd151996f0d6a693520358/16:9/w_2560%2Cc_limit/GSHOCK_HP.jpg'),
(2300, 'Casio Enticer women’s', 'The round watch face features a striking inset dial with handy day display for a touch of extra interest. Water resistance for daily use frees you from worry when washing up or out in the rain.', 'Casio', 63800, 2.5, 8, 'https://media.istockphoto.com/id/1023491066/photo/classic-gold-watch-on-black-background.jpg?s=170667a&w=0&k=20&c=MfbuKG_gITDDrdSzzPcNybA_3jWQ7g-Y9kIz5jrPpjU='),
(2400, 'Casio Vintage Orvin', 'Introducing the A171 Series of round-face, unisex timepieces.Uncluttered monotone coloring combines with middle-sized unisex designs that go great with a wide variety of styles.The bands feature a slide-type clasp that lets you easily adjust the band length without special tools.Features and functions include calendar and stopwatch capabilities, along with everyday wear water resistance and LED light illumination for easy reading in the dark.', 'Casio', 13500, 0, 16, 'https://casiofanmag.com/wp-content/uploads/2015/09/CASIO-EDIFICE-Concept-Presentation-1.jpg'),
(2500, 'Fossil A171WE-1ADF', 'Introducing the A171 Series of round-face, unisex timepieces.Uncluttered monotone coloring combines with middle-sized unisex designs that go great with a wide variety of styles.The bands feature a slide-type clasp that lets you easily adjust the band length without special tools.Features and functions include calendar and stopwatch capabilities, along with everyday wear water resistance and LED light illumination for easy reading in the dark.', 'Fossil', 50000, 0, 7, 'https://c1.wallpaperflare.com/preview/613/162/345/watch-product-blue-antique.jpg'),
(2600, 'Fossil G-Shock GA', 'Venture into misty forests and magical landscapes with moody G-SHOCK colors styled for mystery.With bezels and bands crafted in mixed-color resins, these Mystic Forest watches feature a unique finish reminiscent of paint swirls in green and yellow, brown and orange.', 'Fossil', 32500, 1.5, 12, 'https://c0.wallpaperflare.com/preview/272/970/559/clock-watch-fossil-dial.jpg'),
(2700, 'Fossil Sport Men', 'Men luxury timepieces with technical advancements and a sporty style. 1 Second Chronograph Measures up to 60 Minutes, 12/24 Hour Time, Date. Silver-Tone Stainless Steel , Mineral Crystal', 'Fossil', 28000, 0, 5, 'https://images.pexels.com/photos/3419331/pexels-photo-3419331.jpeg?cs=srgb&dl=pexels-sairam-rasa-3419331.jpg&fm=jpg'),
(2800, 'Fossil G-Shock Calibri 950', 'Venture into misty forests and magical landscapes with moody G-SHOCK colors styled for mystery.With bezels and bands crafted in mixed-color resins, these Mystic Forest watches feature a unique finish reminiscent of paint swirls in green and yellow, brown and orange.', 'Fossil', 25000, 5.5, 0, 'https://e1.pxfuel.com/desktop-wallpaper/326/349/desktop-wallpaper-men-s-wrist-watch-by-fossil-wrist-watch.jpg'),
(2900, 'Fossil Hybrid 126610LN', 'For the first time in the legendary brand’s history, the Oyster case of the Submariner has been sized up from 40mm to 41mm. It may not seem like a significant change to amateur watch fans, but for true collectors, you know this is a big deal. Especially when talking about one of the most iconic, most highly celebrated, most recognizable watches the world over.', 'Fossil', 23500, 0, 5, 'https://c4.wallpaperflare.com/wallpaper/146/154/533/fossil-watches-backgrounds-stones-fossil-wallpaper-preview.jpg'),
(3000, 'Fossil Alpha 5500 Gent’s ', 'The round watch face features a striking inset dial with handy day display for a touch of extra interest. Water resistance for daily use frees you from worry when washing up or out in the rain.', 'Fossil', 18990, 2.5, 8, 'https://e1.pxfuel.com/desktop-wallpaper/463/76/desktop-wallpaper-fossil-hybrid-hr-review-a-beautifully-flawed-smartwatch.jpg'),
(3100, 'Swatch Sport Luxury', 'Men luxury timepieces with technical advancements and a sporty style. 1 Second Chronograph Measures up to 60 Minutes, 12/24 Hour Time, Date. Silver-Tone Stainless Steel , Mineral Crystal', 'Swatch', 105000, 5, 3, 'https://isochrono.com/wp-content/uploads/2020/03/isochrono_swatch_q_james_bond_no_time_to_die_05.jpg'),
(3200, 'Swatch Rolan AW0092-07Q', 'For the ultimate classic vintage style, the Rolan from Swatch features a 40mm gold-tone case made of stainless steel. The dial is an elegant champagne color, perfectly accented with the ash brown leather strap that rounds out the look. Advanced features include a day/date function, as well as Eco-Drive technology, so it is powered by light and will never require a battery.', 'Swatch', 92700, 0, 0, 'https://c4.wallpaperflare.com/wallpaper/141/280/953/5bd34fa71430e-wallpaper-preview.jpg'),
(3300, 'Swatch Promaster Ts', 'The 50th Anniversary edition Promaster Tsuno Chrono Racer is a high-performance timepiece with an undeniably distinct design. Inspired by the original Citizen Bullhead from 1973, the uncommon chronograph features a 45mm two-tone stainless steel case secured by a sleek brown leather strap. With a gold-tone dial, the layout design makes use of four black sub-dials accented with red hands to create a dynamic and sporty aesthetic.', 'Swatch', 80200, 15, 12, 'https://c1.wallpaperflare.com/preview/241/645/300/swatch-wrist-watch-luxurious.jpg'),
(3400, 'Swatch Edifice', 'Men luxury timepieces with technical advancements and a sporty style. 1 Second Chronograph Measures up to 60 Minutes, 12/24 Hour Time, Date. Silver-Tone Stainless Steel , Mineral Crystal', 'Swatch', 68000, 0, 5, 'https://e1.pxfuel.com/desktop-wallpaper/382/38/desktop-wallpaper-wristwatch-swatch.jpg'),
(3500, 'Swatch Rolan AW0', 'For the ultimate classic vintage style, the Rolan from Swatch features a 40mm gold-tone case made of stainless steel. The dial is an elegant champagne color, perfectly accented with the ash brown leather strap that rounds out the look. Advanced features include a day/date function, as well as Eco-Drive technology, so it is powered by light and will never require a battery.', 'Swatch', 55400, 0, 0, 'https://i0.wp.com/elegance-suisse.ch/wp-content/uploads/2020/04/Breguet-swatch-montre-son-exposition-Marine-a-Paris.jpg?fit=751%2C500&ssl=1'),
(3600, 'Swatch Tsuno-M550', 'The 20th Anniversary edition Promaster Tsuno Chrono Racer is a high-performance timepiece with an undeniably distinct design. Inspired by the original Swatch Bullhead from 1973, the uncommon chronograph features a 45mm two-tone stainless steel case secured by a sleek brown leather strap. With a gold-tone dial, the layout design makes use of four black sub-dials accented with red hands to create a dynamic and sporty aesthetic.', 'Swatch', 38200, 1.5, 6, 'https://images.alphacoders.com/655/655622.jpg'),
(3700, 'Omega Sport Luxury Eco-Drive', 'Men luxury timepieces with technical advancements and a sporty style. 1 Second Chronograph Measures up to 60 Minutes, 12/24 Hour Time, Date. Silver-Tone Stainless Steel , Mineral Crystal', 'Omega', 105000, 5, 2, 'https://cdn.wallpapersafari.com/83/79/8TplNW.jpg'),
(3800, 'Omega Rolan AW0092-07Q', 'For the ultimate classic vintage style, the Rolan from Omega features a 40mm gold-tone case made of stainless steel. The dial is an elegant champagne color, perfectly accented with the ash brown leather strap that rounds out the look. Advanced features include a day/date function, as well as Eco-Drive technology, so it is powered by light and will never require a battery.', 'Omega', 92700, 0, 0, 'https://cdn.wallpapersafari.com/95/6/dcwkaX.jpg'),
(3900, 'Omega Promaster Ts-2', 'The 50th Anniversary edition Promaster Tsuno Chrono Racer is a high-performance timepiece with an undeniably distinct design. Inspired by the original Citizen Bullhead from 1973, the uncommon chronograph features a 45mm two-tone stainless steel case secured by a sleek brown leather strap. With a gold-tone dial, the layout design makes use of four black sub-dials accented with red hands to create a dynamic and sporty aesthetic.', 'Omega', 80200, 15, 12, 'https://wallpapercave.com/wp/wp5386390.jpg'),
(4000, 'Omega Edifice', 'Men luxury timepieces with technical advancements and a sporty style. 1 Second Chronograph Measures up to 60 Minutes, 12/24 Hour Time, Date. Silver-Tone Stainless Steel , Mineral Crystal', 'Omega', 68000, 0, 2, 'https://www.itl.cat/pngfile/big/6-61215_watch-hd-wallpaper-omega-seamaster-planet-ocean-bond.jpg'),
(4100, 'Omega Rolan AW0092-07Q', 'For the ultimate classic vintage style, the Rolan from Omega features a 40mm gold-tone case made of stainless steel. The dial is an elegant champagne color, perfectly accented with the ash brown leather strap that rounds out the look. Advanced features include a day/date function, as well as Eco-Drive technology, so it is powered by light and will never require a battery.', 'Omega', 55400, 0, 0, 'https://www.wallpapers4u.org/wp-content/uploads/omega_speedmaster_watches_wristwatch_82396_1920x1080.jpg'),
(4200, 'Omega Tsuno-M550', 'The 20th Anniversary edition Promaster Tsuno Chrono Racer is a high-performance timepiece with an undeniably distinct design. Inspired by the original Omega Bullhead from 1973, the uncommon chronograph features a 45mm two-tone stainless steel case secured by a sleek brown leather strap. With a gold-tone dial, the layout design makes use of four black sub-dials accented with red hands to create a dynamic and sporty aesthetic.', 'Omega', 38200, 1.5, 6, 'https://f.vividscreen.info/soft/e52b64f2fe74aa6df8e0b756ddda0cf0/Omega-Watch-1920x1080.jpg'),
(4203, 'qq', 'qq', 'Fossil', 0, 1, 12, 'https://cdn.wallpapersafari.com/83/79/8TplNW.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(12) NOT NULL,
  `firstName` varchar(32) NOT NULL,
  `lastName` varchar(32) NOT NULL,
  `userEmail` varchar(64) NOT NULL,
  `username` varchar(64) NOT NULL,
  `userPassword` varchar(128) NOT NULL,
  `userGender` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `firstName`, `lastName`, `userEmail`, `username`, `userPassword`, `userGender`) VALUES
(1, 'user', 'one', 'userone@gmail.com', 'userone', '$2y$10$adAkRMBdAOjjQt0n0ZTNne322UiVBNLbIlV0HjWFr76.oin8h7z4e', 'm'),
(2, 'user', 'two', 'usertwo@gmail.com', 'usertwo', '$2y$10$5Hdcp10sx5ikznsod1IB3.io7aLJtTzDF8w/W9IPZBPbfyE3Vtete', 'f'),
(3, 'user', 'three', 'userthree@gmail.com', 'userthree', '$2y$10$Xpq51I0JzKgNttgZOjFDZeqynE8eBzD4kWiDEkJ1p7oEqd8QH3fye', 'o'),
(4, 'test', 'one', 'testone@gmail.com', 'testone', '$2y$10$F8t8DOVkAMeS/m6l8NqFY.UChI3sZXFKFcQDXiyjFV2Jjbi2p2pyq', 'm'),
(5, 'John', 'Doe', 'johndoe@gmail.com', 'johndoe', '$2y$10$XNkrFXjYuKbEvDX5y7RyfuB0jgxz5o/bsXkYg4DMpiSQSwbyvXILS', 'm'),
(6, 'mkbhd', 'mark', 'mkbhd@gmail.com', 'mkbhd', '$2y$10$XZRvP1dQKoMRpSzUmEpStOPV8AD.pP0jKyEaN/dGKebrlpVkOt.WK', 'm'),
(7, '1', '1', '1@gmail.com', 'user1', '$2y$10$mOxMrRdZOsDuGi3mKGtJT.lqsiOvT5gaRs3..om4W6bQRSvgl8Vf.', 'm'),
(8, '1', '1', '1@gmail.com', '1', '$2y$10$o1KCTOc9OhXFoQSMOpr6l.E6ItC5h4pR7Y8/GoJODsHLmfk9jy/o2', 'm'),
(10, 'admin', 'two', 'admin@gmail.com', 'admin', '$2y$10$djSprk7v/Kn9noLEVY6zZu6Fjpm2PAQU3fJpU/BIaj/YSoRZWukEK', 'm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contactId`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderId`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contactId` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderId` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productId` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4204;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
