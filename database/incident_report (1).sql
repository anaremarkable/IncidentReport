-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2021 at 03:55 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `incident_report`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `account_type` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `username`, `password`, `account_type`, `status`) VALUES
(1, 'aa26bdcc0bf6133606a670aa64125cb4', 'aa26bdcc0bf6133606a670aa64125cb4', 1, 0),
(8, '3f6108a20b0d3eab65b1e73b4632b5b8', '0ddd6f6f327ef1ce59bb786c99b81ec4', 0, 0),
(9, '41fc104bf06d17054bca50aa852f59b0', 'df04ef56c8e822459bb3abc7ed4b5650', 0, 0),
(10, '55ba3bedc519883c6d708c460a07fba8', '44d59a0d6e12c271c9e2793a157895de', 2, 0),
(11, 'b78aa35b318f9ece14f07a415d2a836d', '4533ec9d3fbd6e18341927c6859847aa', 3, 0),
(12, 'e3623506b3608d488a76ea940b7b3b8b', '78dac9d1cf958ef4148431b8cff0e7b8', 3, 0),
(13, 'ce3a01b33ce749bd7885d6e96f8e7d66', '0825eb48691970ddab5a7a0cd88cf8b4', 3, 0),
(14, 'a7d32eac86eb8fb7c1d4a20eebdd8cf9', '0c8c17d667e5cb0875c1aa081202573d', 3, 0),
(15, 'd100d647b2eac98d2f72e4cb8e816fc6', '6a15c084e728acf2c786d5416adaf65c', 3, 0),
(16, '9627b9560ade59918b932527bbe87f50', '62cada51fc65be45facdcf36516447cf', 0, 0),
(17, 'c76c195ce0e6005a408c16a96a09a11b', 'bfd92386a1b48076792e68b596846499', 0, 0),
(18, 'e6e394fc7afbdff5f387b6d67292473c', 'c85dd7601a640147b75f819fdaa29876', 0, 0),
(19, '1ce6fc5fa840b27fd9b8ce371c4d5453', '84533e7fefc9781fe76e0863957dc7f6', 0, 0),
(20, '353da3fbdd5067e46ffdef865c14cf73', '90e8c040f2fe0ffc22cad010258847c3', 0, 0),
(21, 'cd01b6408c5e212008435757e6e4238d', 'bf69091e6104b061b93bc58ed0dcb314', 0, 0),
(22, '0d0eb405de6ccd12626f229b4e65379f', '419e2f082e421243b9577d422606c45d', 0, 0),
(23, '60841182951e862b12efe366b52830cd', 'cb728ef600659416f7a71e894e859dba', 0, 0),
(24, 'a89dcd28c2843432af62d47e9ddbba32', '85fc1ea5e8bba2c7a0459967864951ce', 0, 0),
(25, '50087a06a48fa7ea5cef31f4f6ab2b28', 'ca50deda08a8e6433481af69c7f2ed28', 0, 0),
(26, '99b1742785509e17219c6d9d43daa192', '4533ec9d3fbd6e18341927c6859847aa', 0, 0),
(27, 'c750259a70c41ba212ee76b9bcbdbdab', '78dac9d1cf958ef4148431b8cff0e7b8', 2, 0),
(28, '6a897057c02165eb4b2f124b668ea78f', '4fca785dd20026d0385f93245c8eace3', 2, 0),
(29, '0a17c8333bd3e6859fce5c68a13c8c53', 'b0a83180d17b9c5a4d5448dd9db1a4d1', 2, 0),
(30, 'a2464e4bcf6f1042294381f610501023', 'd553f9e799f9cede876745b03dc32e58', 2, 0),
(31, 'acf7ef943fdeb3cbfed8dd0d8f584731', '7b74fc6204d5ef422b8b8ee10e5d64a8', 3, 0),
(32, '147689d0ee32c4ec9a4f5dbcb236898b', 'a71de591fc6b6e60df094a4efd350826', 3, 0),
(33, 'edce9c34f6b4d591c8570faad25406a0', 'd553f9e799f9cede876745b03dc32e58', 0, 0),
(34, 'aa6d16a3abe7f664303b91a85e702b0b', '662466b587f39e497472af48c2420b82', 0, 0),
(35, 'f42d5a752f3d41cadfe2fb7c2edcfd8a', 'ca50deda08a8e6433481af69c7f2ed28', 0, 0),
(36, '2e7317aac035a1e854ecdbd1b3481b80', 'b8e081841224d4abbd5f04fc486f55a3', 0, 0),
(37, '4369c4fb2a7b43d39634be616efdd8a8', '151c17bc31a0002d49c67bf64654f31a', 0, 0),
(38, 'a34068bde7d1480ca8c28c7c8592eb41', 'a34068bde7d1480ca8c28c7c8592eb41', 3, 0),
(39, '01fd51144b54e11d004c5eb65dfeeb7c', '01fd51144b54e11d004c5eb65dfeeb7c', 2, 0),
(40, '28fc96f6a19584fae3d7e8eca973a13a', '4369c4fb2a7b43d39634be616efdd8a8', 0, 0),
(41, '170bde06bc2dcbe6e3809bbe583f8570', '07a65f1de652ab2b6cfe602fe8bb67c8', 3, 0),
(42, '73b73c4143db3097c6a08b88014c7eeb', '38a6f2311eb50b97ed0eff5bf4fe7e2d', 0, 0),
(43, '73aed3ce5500bc253adf026b99c61774', '4aaad3d344b1ae372c98b079d29093b0', 3, 0),
(44, '34c08b28c48f41bb69491b05d579efe2', 'b42ece4b9269c75146fb17774fe2ac47', 0, 0),
(45, '13e749d3341a84b78c74392bb0d1068d', 'b3013407596bb1fb6db1ee1bea7bd00c', 2, 0),
(46, '5e87b330d1c0a6bb232a874dbb2d14dc', 'ac7233cc0cbc859deff3c431613ccfde', 2, 0),
(47, '49b98836e0944f7ba240641ede61aca7', '0627d3cae8ea0569e3d1362c70bd8cd6', 2, 0),
(48, '6108f8b63bfd02e387bf238bf83856be', 'aa222a1949dcfe7792b7aa19aa2e4bf2', 0, 0),
(49, 'b3fb96421fc4cf6e560ca0f856cc92af', '98eb19f4caf8e523cee85f6bb44d3a78', 3, 0),
(50, '2ff9eaac5e017f3fb0cfdf030125b0c5', 'e6916445d004da6a851d1b8d8bac8d4b', 3, 0),
(51, 'a7ec630d7e50e8d389c88f23f677e41c', 'e9f949370acac9479f2779427c706d0c', 3, 0),
(52, '6cf00f65d592118c1d98971c94c9a9b7', '676709e33dab42da345169fa3ecab451', 3, 0),
(53, 'c71d1bda0d01499122894f499f86945d', '62cada51fc65be45facdcf36516447cf', 3, 0),
(54, '1b5d385fec60016d2b7a0e814e22dc38', 'ebb3aa0228716d2decfcc9b868b03c60', 3, 0),
(55, 'fb1d86974cadc763682f6d81088d61e5', '5e34228daaae5404f8e9c0751b628fd8', 3, 0),
(56, '4d9f5a88ecdea8f6c82bf589f5b5ca46', '07a65f1de652ab2b6cfe602fe8bb67c8', 3, 0),
(57, '2a5073db5cba2e3da66e2720619de732', '85fc1ea5e8bba2c7a0459967864951ce', 3, 0),
(58, 'e4e1e95d18f21b7295222efceecfbe7e', '419e2f082e421243b9577d422606c45d', 3, 0),
(59, 'e1d3710d2ad8615a5d1bfc26fa666e18', '20c151e4d9b30499c5dc0efb5ecc9ff6', 3, 0),
(60, 'bf4788f081904df961a13c60a27d96c1', 'd3d99374e8e563310a38f13ecf8a5abc', 3, 0),
(61, 'dcc538a679d266bbab6f0b666110be3f', 'e9f949370acac9479f2779427c706d0c', 3, 0),
(62, 'ec23d560c25c5262ee99dcaf9915f84b', 'b0a83180d17b9c5a4d5448dd9db1a4d1', 3, 0),
(63, 'eaad2709a3be6139656aa467532525d1', '07a65f1de652ab2b6cfe602fe8bb67c8', 3, 0),
(64, '2e3e3058239c78340a683ea8c63724e0', '98eb19f4caf8e523cee85f6bb44d3a78', 3, 0),
(65, '06aba8e44cbe8193dc479f49acdc0647', '78dac9d1cf958ef4148431b8cff0e7b8', 3, 0),
(66, 'e1041103311350ff4365f4d7564ede8c', '662466b587f39e497472af48c2420b82', 3, 0),
(67, 'a518ea6b449d440035818eb7662c4e02', 'ebb3aa0228716d2decfcc9b868b03c60', 3, 0),
(68, '5dc6b9ed3db7ae9789b3f839df3b78c9', 'bf69091e6104b061b93bc58ed0dcb314', 3, 0),
(69, '10dec0d3f8fea805519649444f454b95', '98eb19f4caf8e523cee85f6bb44d3a78', 3, 0),
(70, '3f74d8202a919b3247fb89dfa6987bf5', '218d7ca5c9a8eb1537b7c888de0a5bfd', 3, 0),
(71, '79dd5b019a2493726e3159c3d1a0631a', '419e2f082e421243b9577d422606c45d', 3, 0),
(72, '7350ce6b9ac78bc2d6d0444499709381', '0ddd6f6f327ef1ce59bb786c99b81ec4', 3, 0),
(73, '942fee02de9a00a6e5582767e16bec8e', '85fc1ea5e8bba2c7a0459967864951ce', 3, 0),
(74, '88126487be2426d8a2fad7e70c5aa58b', '5d8d91030a241d780aeb9139bf47d594', 3, 0),
(75, 'f95832f7e0923c92e82ecbfa20f6f3dd', 'f8578ed1bca6de9548d564f578bc8ca3', 3, 0),
(76, '9ebc4e570776c027a1b69d7b108e8874', 'e9f949370acac9479f2779427c706d0c', 3, 0),
(77, 'a2a71e3945133763304d9e224b4d6248', 'b3013407596bb1fb6db1ee1bea7bd00c', 3, 0),
(78, '8a29ed3b8869a728d67893d7c2891f69', '419e2f082e421243b9577d422606c45d', 3, 0),
(79, '6bf47671a74cbcd601b6586b4b23c104', '38a6f2311eb50b97ed0eff5bf4fe7e2d', 3, 0),
(80, '5db658f3b01b3c61f2621adea39288ae', 'c85dd7601a640147b75f819fdaa29876', 3, 0),
(81, '204965d57dbb8ad1f297767c1b34c7a3', '8356c8b362c8462d5864ff2e562ba419', 3, 0),
(82, '4583f67c986f374d9b6bba04e4cb7c0f', '61fb8747a2fdb787a8e074c83fc3b62b', 3, 0),
(83, '6c578ac731b0d6f2ef497cd08a2a69fc', '5d2e8f7ad113067bf204fa46de205b62', 3, 0),
(84, '63094eec8349dd60b82ea2266696584a', '2a4abda794bc34fbfe9beeebeea8a24b', 3, 0),
(85, '79288a371fabf46265385d1a74fd5361', '1cc6ae9053b9eb506daf3968151619e0', 3, 0),
(86, '58d50ae1b15ad0afb8bfc434ae195f5b', '676709e33dab42da345169fa3ecab451', 3, 0),
(87, 'a02e9d6c4d85bd197450efadc626e5ee', '0ddd6f6f327ef1ce59bb786c99b81ec4', 3, 0),
(88, '2f33f85d7fca6877e67f9f49123d6ee5', '435959a9467e1e5a30cb5ff84a1f9105', 3, 0),
(89, '7363a0d0604902af7b70b271a0b96480', 'ca50deda08a8e6433481af69c7f2ed28', 3, 0),
(90, '3226a4176307491290e38f98f5cf9087', 'c9a3fa9e3935a17b779078540932ee7d', 3, 0),
(91, '5b881a160ec70c019b4f5b4f3f14e69d', '676709e33dab42da345169fa3ecab451', 3, 0),
(92, 'ec55f5359e9d250e38e7d440be0d95a0', 'b0a83180d17b9c5a4d5448dd9db1a4d1', 3, 0),
(93, 'dbc4ed6f69d498f3807cd832d1e7e9c9', '84533e7fefc9781fe76e0863957dc7f6', 0, 0),
(94, '38b3944260096b0c3231e4e35d3870a3', 'b14cc546b830ad5f59b7336123eb7592', 3, 0),
(95, '4e760b159ea15a204cb301cbf474a769', '7bf56d22ba3bf925c88a9586cdcca524', 3, 0),
(96, 'b29cf4eb3f39089453ee4c4946530fc1', '9271c0b57808899380a8aa6771ce320b', 3, 0),
(97, '59006a427026b2d94884786e6d3169da', '78dac9d1cf958ef4148431b8cff0e7b8', 3, 0),
(98, 'c68b267595e39f52d48e8607ea848270', 'df04ef56c8e822459bb3abc7ed4b5650', 0, 0),
(99, 'ca89540b4d2f51287f903543f35543a9', '3b7de7554aae316d56c7eca89bc0a042', 0, 1),
(100, 'cbe722cafd5034d58b74b2abc63d6242', '0627d3cae8ea0569e3d1362c70bd8cd6', 0, 0),
(101, 'a87d8825290da511dcdb15be0faae375', '20c151e4d9b30499c5dc0efb5ecc9ff6', 0, 0),
(102, 'edf4cfe0128131305908cb1e5d6f45da', 'e9722f4692767a974446c2458281010b', 0, 0),
(103, 'c752229d2824901627306a19cc752fd7', 'ac7233cc0cbc859deff3c431613ccfde', 0, 0),
(104, 'ac4017385f855e145167c3b83c339dd3', 'b14cc546b830ad5f59b7336123eb7592', 3, 0),
(105, 'f877f838ca9998308d5f9ceb8e5c9203', 'b8e081841224d4abbd5f04fc486f55a3', 0, 0),
(106, 'ad830f83d3416140402049286e026e91', 'be53d352a7ad66d7d80ed7d43514988e', 3, 0),
(107, '564e66ff349dd65855241ea298d4925b', '4fca785dd20026d0385f93245c8eace3', 3, 0),
(108, 'b15e8c6c15d9342206d5cb45db170585', 'c85dd7601a640147b75f819fdaa29876', 3, 0),
(109, '3928b62924aa96c83ae3f5b76d4f4bbf', '66db102618ffa06a9f922d55aa0c39ed', 3, 0),
(110, '318e7f3b655d8b601128c7304f17c0a1', '47e9080391016842168ffd36d8d0b143', 3, 0),
(111, 'fd4d3c6f94355f13b19ffcca090ccbc4', '4aaad3d344b1ae372c98b079d29093b0', 3, 0),
(112, 'b4edfe9d8f46419a94e3a5d944c2c7e6', '4aaad3d344b1ae372c98b079d29093b0', 3, 0),
(113, '07748ea0a5621d06c5c796bbbe100844', 'ab9debfb306ac659ff0a7f6da0a623e2', 3, 0),
(114, '48931012678c053f3cedcefe794d22f5', '44d59a0d6e12c271c9e2793a157895de', 3, 0),
(115, '6e32b045aaf761a82fba174a1c90483f', '676709e33dab42da345169fa3ecab451', 3, 0),
(116, '9fd719cf51ae2b87d94140a19d9492d7', '78dac9d1cf958ef4148431b8cff0e7b8', 3, 0),
(117, 'bae58f82de3ba5ba6ce553d831900a23', 'ac7233cc0cbc859deff3c431613ccfde', 3, 0),
(118, '2fb2eb7a59ffe28f9011cc2848bea9cf', 'cb728ef600659416f7a71e894e859dba', 0, 0),
(119, '236a902719d93498bf0ebc95efc76081', 'ca50deda08a8e6433481af69c7f2ed28', 0, 0),
(120, '88bfe90e45a023836745426cb23353d0', 'd3d99374e8e563310a38f13ecf8a5abc', 3, 0),
(121, 'c217172beb878cc99932e636e9273410', '4aaad3d344b1ae372c98b079d29093b0', 0, 0),
(122, 'bde985ce748e18eb93802a283d8043fa', '0c8c17d667e5cb0875c1aa081202573d', 0, 0),
(123, '982f977034d93b5ac20337a97914af79', '2a4abda794bc34fbfe9beeebeea8a24b', 3, 0),
(124, '14905425de04f321c1126ecaeab71343', 'b8e081841224d4abbd5f04fc486f55a3', 3, 0),
(125, '5c108a3374c802712ea7fa43547f6ddf', 'aa222a1949dcfe7792b7aa19aa2e4bf2', 3, 0),
(126, 'd413890455aa216f2bf9163c52036d8b', '62cada51fc65be45facdcf36516447cf', 3, 0),
(127, '6a7f77cb28d48886607032fbd2d68d65', 'cb728ef600659416f7a71e894e859dba', 3, 0),
(128, '8f8d975a6dc7eda0d3fb49cc3f3c13ad', '940adf9c808bdd40930389b5a5a4b29d', 3, 0),
(129, 'ad0ced88a855762f84e974105c107ce4', '5d2e8f7ad113067bf204fa46de205b62', 3, 0),
(130, '3baf31b7e5a3a637d1094c5145c75aba', 'eddc6e7ac71e37c899de0eb00c6d118c', 3, 0),
(131, 'fe958fe50dde69d02272ecba92d945d6', '38a6f2311eb50b97ed0eff5bf4fe7e2d', 3, 0),
(132, 'b6fd1a2f16097ae14f8920a818667e0d', 'b42ece4b9269c75146fb17774fe2ac47', 3, 0),
(133, '64e43e2579c389f5e5453251df002ec0', '84533e7fefc9781fe76e0863957dc7f6', 3, 0),
(134, '516eaa60a96b560e5e51634e98808d16', 'bdc2d12f90867717d1bbc5bc01bb614f', 0, 0),
(135, '4265579b735f1f4ca0ad11f18472c1bd', '4265579b735f1f4ca0ad11f18472c1bd', 0, 0),
(136, '89c643ad6e23797812311aa92743e040', '85fc1ea5e8bba2c7a0459967864951ce', 0, 1),
(137, 'b96dd7de82f3a64ca10a21e0b3e72fdc', 'd3d99374e8e563310a38f13ecf8a5abc', 0, 0),
(138, '7ef597fb722f13d1c896152be365c2c2', 'cb728ef600659416f7a71e894e859dba', 0, 0),
(139, '3cb2d41439c2e5ecdae266bdd9ba46d6', '90e8c040f2fe0ffc22cad010258847c3', 0, 0),
(140, '738c433fc75b62571f2aee3fe3d62417', '435959a9467e1e5a30cb5ff84a1f9105', 0, 0),
(141, 'e1638389d8ba440e3fa5e4296151e196', '84533e7fefc9781fe76e0863957dc7f6', 0, 0),
(142, '34ddceeb0ee5bc6480881ad9f5330fb3', 'be9f578ad3c573a369abe6c2368a36c8', 0, 0),
(143, 'f96715fec81ddb63195b5ebeeec7ad8b', '0ddd6f6f327ef1ce59bb786c99b81ec4', 0, 0),
(144, 'ff317bd0683e4164b820e4ad46ad7e19', '940adf9c808bdd40930389b5a5a4b29d', 0, 0),
(145, '8f8fa8af5eba7aa1a9af024f13af9e61', '704ff094045010b0be542c2f3d80bdd1', 0, 0),
(146, '225ee1c2e789505ea4ca50480436debb', '0825eb48691970ddab5a7a0cd88cf8b4', 0, 0),
(147, '09f68fb3829396d7d145056e9644d86e', '8356c8b362c8462d5864ff2e562ba419', 0, 0),
(148, 'bef3b5337d208230bc38cd2ade9c2612', 'd0e9ee820088a9f88b6323333dd053f6', 3, 0),
(149, '935370305f8e5b29e115e5cf4690aae2', 'ca50deda08a8e6433481af69c7f2ed28', 3, 0),
(150, '63c7948a597f243d7500cbbec250f7e4', '98eb19f4caf8e523cee85f6bb44d3a78', 3, 0),
(151, '826011cc2767979575b57d1259a2a649', '62cada51fc65be45facdcf36516447cf', 3, 0),
(152, 'd059820a53e02e9389645a0918f9f563', '47e9080391016842168ffd36d8d0b143', 3, 0),
(153, '633f583b51eca43897f29907d35f29ee', '662466b587f39e497472af48c2420b82', 0, 0),
(154, '054588de2121b5c394a0412c95845538', '6a15c084e728acf2c786d5416adaf65c', 3, 0),
(155, '839a153a3fe96e5fad3f58aec179cea1', '839a153a3fe96e5fad3f58aec179cea1', 3, 0),
(156, '9a94ed63edc1e919e905858f5e5f5ff1', '4aaad3d344b1ae372c98b079d29093b0', 3, 0),
(157, '', '', 0, 0),
(158, '686009547260d78952fbf078a75005be', '5d1aee9bf67f5de3a71639d66a577395', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `faculty_program` int(11) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `faculty_position` varchar(255) NOT NULL,
  `account_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `fullname`, `department`, `faculty_program`, `contact`, `faculty_position`, `account_id`, `status`) VALUES
(65, 'Victor Parillas Jr.', '0', 0, '09763636374', 'faculty', 130, 0),
(66, 'Jp Remar Serrano', '0', 0, '09475635243', 'faculty', 131, 0),
(68, 'Alice Nieto', '0', 0, '0947586364', 'program head', 133, 0),
(69, 'Emmanuel Isaiah Detera', '0', 0, '09098765432', 'faculty', 148, 1),
(70, 'Ma Jemilyn Datu', '0', 17, '09475768686', 'faculty', 149, 0),
(71, 'Dhan Davish Alamo', '0', 0, '09495969696', 'faculty', 150, 1),
(72, 'Collyn Empleo', '1', 17, '09875456787', 'faculty', 151, 0),
(73, 'Richard Monreal', '1', 1, '09953400391', 'dean', 152, 0),
(75, 'ana gabarda', '0', 0, '09774256218', 'faculty', 155, 0),
(76, 'Yen dela cruz', '1', 0, '09774256218', 'faculty', 156, 0),
(77, 'Gabo Nicoleta', '0', 3, '09774256218', 'program head', 158, 0);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `feedback` varchar(2555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `student_id`, `date_added`, `feedback`) VALUES
(7, 40, '2021-10-22 09:03:07', ' Describe how you would deal with budget cuts.'),
(8, 50, '2021-10-22 09:51:11', 'What are the essential qualities, outcomes, characteristics of an academic mentor. '),
(9, 49, '2021-10-22 09:56:06', 'What are your professional goals '),
(10, 44, '2021-10-22 10:10:23', 'Saan napupunta misc fee '),
(11, 46, '2021-10-22 10:12:33', 'Bakit kulang ang funds ng the channel '),
(12, 47, '2021-10-22 10:13:59', '  How do we plan to be equitable for all student learners'),
(13, 48, '2021-10-22 10:15:13', 'In what ways do you empower teachers to be leaders and role models for students? ');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `picture_name` varchar(255) NOT NULL,
  `folder_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `picture_name`, `folder_name`) VALUES
(95, 'bca2a2f2863d10d8e4b2d2099df67302.jpg', 'student_profile'),
(96, 'f8fb6c499718602a4caafddc045dadf0.jpg', 'student_profile'),
(97, '5e3665dff0d029c069dfb0248e80348d.jpg', 'student_profile'),
(98, 'ac43db77151f2d771ae5c451b330f872.jpg', 'student_profile'),
(99, '1a9fe705646526f84bc1e1d9f95bcb42.jpg', 'student_profile'),
(100, '8d27329fc0a2a1a36c278313ba375143.jpg', 'student_profile'),
(101, '990cf54b572832d9b74ae09acd5da9cf.jpg', 'student_profile'),
(102, '6f58b92b94a14f1a9f9f58741630b8a2.png', 'student_profile'),
(103, '93db527d9572fce22871e26d48a76601.png', 'incident_picture'),
(104, 'cf8a7f5d44b4a3828e082800b73c4e38.jpg', 'incident_picture'),
(105, '1608519861b243e17a5f2653b5afe200.jpg', 'incident_picture'),
(106, '05ed7f0e30f2ff7e097c4271f8c2c84e.jpg', 'incident_picture'),
(107, 'c6e9663c86e73c2c4bdd804ce55ba57a.jpg', 'incident_picture'),
(108, 'ef56c5d1ea4fe97b833f20f46b8b5ded.jpg', 'student_profile'),
(109, '4b057534ad08bbbece9b1de14e29d443.jpg', 'student_profile'),
(110, 'ba540363dc8fcb44971c71dfcc07c9c0.jpg', 'student_profile'),
(111, '5f546afb199797ad6329d70dfb3eeef2.jpg', 'student_profile'),
(112, 'ac37a4e9cdea660b10fed8e6d014b89a.jpg', 'incident_picture'),
(113, '66d385723158836e72816e3d925457c3.jpg', 'incident_picture'),
(114, 'd58cd8743fd45d6fcfdddff9fdc955f8.png', 'incident_picture'),
(115, '8a959bf970b66eb3da4520ad33ec8bef.jpg', 'incident_picture'),
(116, '787de507fe9244e1e088f8c1f433fa1f.jpg', 'student_profile'),
(117, 'ed6034861f5b95d44eccdae6846d0e88.jpg', 'student_profile'),
(118, '53892ccda9ce39d775682616963bee60.jpg', 'student_profile'),
(119, 'd50d9a86fec59880f9b41b5191c52a58.jpg', 'student_profile'),
(120, '4b7d0ac476dcd2b12ebef8bda11a4692.jpg', 'student_profile'),
(121, '5c627d1d8aff1ea2413ccaa19f058454.jpg', 'student_profile'),
(122, '9f9690e42f3f00003245be53c57f0290.jpg', 'student_profile'),
(123, 'e6689c3771c19120e1b7e8b8f38069b1.jpg', 'student_profile'),
(124, '68bc4f51340a44a7d99f7d24b44383f3.jpg', 'student_profile'),
(125, '2904a16becf996e583ef1d3102a8de95.jpg', 'student_profile'),
(126, 'e3ad5b820507c25027705a1a72c9158c.jpg', 'student_profile'),
(127, '3b5ea44f95e3e531f65e154349cd765b.jpg', 'student_profile'),
(128, '774da0299bc8b44802b1a94bf6047eec.jpg', 'student_profile'),
(129, '38f213221126a2ee793d2531a3103279.jpg', 'student_profile'),
(130, '64f7314604c47e9d12fab57664add66b.jpg', 'incident_picture'),
(131, '20eb3903ee3fb923873bcd011e7696d3.jpg', 'incident_picture'),
(132, 'c2692e126bcd653fdb2772b905d1b595.jpg', 'incident_picture'),
(133, 'e97f99ca0aa99cbedea54a780a7c4ab0.jpg', 'incident_picture'),
(134, 'e93ae156bdb3f5de61e0fcaaa4894052.jpg', 'incident_picture'),
(135, 'be1d1dde21eb52650b5171e49a21dfc0.jpg', 'incident_picture'),
(136, '1477bc9dd5963cffa31674ab84de7d90.jpg', 'incident_picture'),
(137, '49d650744fc348833dabcf6b8fcee808.jpg', 'incident_picture'),
(138, 'f6fc9179f2965afb5f9f47540e473ee0.jpg', 'incident_picture'),
(139, '58a87fc03f346d2693d9450fc9c3115d.jpg', 'student_profile'),
(140, '3fdb18c2ab48b9c081ae068b8e4b142b.jpg', 'incident_picture');

-- --------------------------------------------------------

--
-- Table structure for table `offense_list`
--

CREATE TABLE `offense_list` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `offense_description` varchar(255) NOT NULL,
  `offense_level` varchar(255) NOT NULL,
  `article` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offense_list`
--

INSERT INTO `offense_list` (`id`, `title`, `offense_description`, `offense_level`, `article`) VALUES
(15, 'Falsification', 'Falsification of official documents, namely, tampering of school records, such as but not limited to, academic credentials, transfer form and certifications', '2', '6.1.2'),
(16, 'Physical Injury', 'Physical Injury and conviction of a crime involving moral turpitude', '2', '6.1.3'),
(17, 'Direct/indirect assault', 'Direct/indirect assault (physical or verbal) causing injury to a fellow  student, faculty member, administration, support staff and others within the  campus premises or within the immediate vicinity of the College', '2', '6.1.4'),
(18, 'Damage', 'Acts or activities that lead to damage of campus or school property and facilities such as vandalism of or willful destruction of property belonging to the school, of a school official, to a faculty member, personnel, another student, or to a visitor', '2', '6.1.5'),
(19, 'Possession', 'Possession, use, or trafficking of prohibited drugs or regulated drugs or  chemicals without proper prescription, inside school premises or within its  immediate vicinity or outside the school during an academic function,  school activity or social functi', '2', '6.1.6'),
(20, 'Possession of firearms', 'Possession of firearms, or other deadly weapons, explosives, or substances within school premises or during school functions or activities in or outside the campus', '2', '6.1.7'),
(21, 'Malversation of funds', 'Malversation of funds collected from the students/unlawful disbursement of school funds', '2', '6.1.8'),
(22, 'Gross misconduct', 'Gross misconduct, such as stealing and sexual harassment ', '2', '6.1.9'),
(23, 'Disgraceful and immoral conduct', 'Disgraceful and immoral conduct such as having an illicit affair', '2', '6.1.10'),
(24, 'Public uprising', 'Any student/s who, without a public uprising, shall employ force or  intimidation, or shall attack or strike with or without a weapon, a person,  a person in authority, personnel or student inside and outside the  campus. ', '2', '6.1.11'),
(25, 'Hazing', 'Hazing of any variety inside or outside the premises of DWCL by an  individual student or a group of students', '2', '6.1.12'),
(26, 'Misuse of the school’s information', 'Misuse of the school’s information technology facilities', '2', '6.1.13'),
(27, 'Engaging in behavior/s', 'Engaging in behavior/s that might lead to loss of life or serious injury, including one’s own, whether intentionally or as a result of recklessness or gross negligence (such as removing fire alarms, tampering with fire extinguishers, sitting on ledges, dr', '2', '6.1.14'),
(28, 'Dishonesty-Public Documents', 'Tampering with and/or falsifying school or public documents and/or communication, or securing or using such documents whether physical or electronic, especially those that are part of, or affect, the official processes of the institution;', '2', '6.1.15.1'),
(29, 'Dishonesty- Gaining access ', ' Illegally obtaining or gaining access to and/or using restricted school documents, facilities or equipment', '2', '6.1.15.2'),
(30, 'Dishonesty-Forgery', 'Forgery', '2', '6.1.15.4'),
(31, 'Cybercrime Prevention Act', 'Committing acts in violation of the Cybercrime Prevention Act of  2012 (R.A. 10175) such as those stipulated in Article II', '2', '6.1.16'),
(32, ' Data Privacy Act ', ' Acts committed in violation of the Data Privacy Act (R.A. 10173)', '2', '6.1.17'),
(33, 'Anti-Photo and Video Voyeurism Act', 'Acts committed in violation of the Anti-Photo and Video Voyeurism Act (R.A. 9995) such as those stipulated in Sec. 4', '2', '6.1.18'),
(34, 'Showing of violent', ' Possession, dissemination or showing of violent/immoral literature, films, pictures or materials. Under no circumstances should students view, upload or download any material that is likely to be unsuitable for students or that will affect the good name ', '2', '6.1.19'),
(35, 'Destroying a Property', 'Defacing, damaging or destroying any property of DWCL or of its students, personnel, employees, or guests', '1', '6.2.1'),
(36, 'Theft', 'Theft, misappropriation of and unauthorized sale of any kind of property belonging to DWCL or member of the school community or a guest of the institution or of any other person', '1', '6.2.2'),
(37, 'Unauthorized solicitation', 'Unauthorized solicitation or collection of contributions/donation or sale of ticket using the name of DWCL, for any cause or purpose within or outside the institution’s premises', '1', '6.2.3'),
(38, 'Creating disorder', 'Creating disorder, tumult, breach of peace, serious disturbance inside and outside the institution premises', '1', '6.2.4'),
(39, 'Threatening', 'Threatening, coercing, intimidating, compelling, encouraging or convincing any student to be absent from class or to participate in any unauthorized activity', '1', '6.2.5'),
(40, 'Leading in boycott', 'Instigating, planning, organizing, participating or leading in boycott / demonstration and disruption of classes', '1', '6.2.6'),
(41, 'Distributing libelous', 'Preparing, publishing or distributing libelous, defamatory statement’s or formulating distrust of duly constituted authorities within or outside the College or by SMS and any form of social media', '1', '6.2.7'),
(42, 'Willful possession of two or more IDs', 'Willful possession of two or more IDs, lending or borrowing an identification card, library card, registration form or examination permit', '1', '6.2.8'),
(43, 'Drinking alcoholic', 'Drinking alcoholic beverages, or manifesting drunken behavior during official school activities within or outside the campus; coming to the school premises under the influence of liquor', '1', '6.2.9'),
(44, 'Use of tobacco', 'Use of tobacco, cigarette, e-cigarette, or vape within the school vicinity based on the provisions of Executive Order No. 26 (s. 2017).', '1', '6.2.10'),
(45, 'Acts of gross disrespect', 'Acts of gross disrespect, in words or in deed, including online or through social media, text messages and the like, which tend to insult or ridicule or show contempt for any member of the faculty, administration, or support staff including students and v', '1', '6.2.11'),
(46, 'Cheating', 'Cheating - Talking during examination, passing or receiving any information or other reference materials, notes or any other attempt to copy or cheat', '1', '6.2.12'),
(47, 'Gambling ', 'Gambling in any form including playing cards within the campus involving a wager', '1', '6.2.13'),
(48, 'Public display of affection', 'Public display of affection', '1', '6.2.14'),
(49, 'Violation against the rules and regulations ', 'Violation against the rules and regulations of the school’s auxiliary units, (i.e. immersion rules, retreat and recollection rules, internship)', '1', '6.2.15'),
(50, 'Committing other acts in and outside the campus', 'Committing other acts in and outside the campus which affect the good name, order, or welfare of the school or have direct and immediate effect on the discipline, morale, or general welfare of the school', '1', '6.2.16'),
(51, 'Tattoos', 'Having tattoos in any form in any part of the body', '1', '6.2.17'),
(52, 'Bullying', 'Bullying and/or any form of harassment or abuse whether done in person or in any platform of media, including any social networking site, website, and text messaging', '1', '6.2.18'),
(53, 'Habitual disregard', 'Habitual disregard or repeated willful violations of established policies and regulations as well as commission of light offenses beyond the limit prescribed in the Table of Light Offenses shown on page 74. Habitual or repeated violation happens when a st', '1', '6.2.19'),
(54, ' Not wearing the official ID', 'Not wearing the official ID and lanyard while inside the campus', '0', '6.3.1'),
(55, ' Disturbing classes', 'Disrupting or disturbing classes or making excessive noise within the school premises', '0', '6.3.2'),
(56, ' Loitering', ' Loitering in corridors during class sessions', '0', '6.3.3'),
(57, 'Disruptive use of mobile phones', 'Disruptive use of mobile phones or other similar communication devices during classes or any formal assemblies.', '0', '6.3.4'),
(58, 'Wearing of Inappropriate campus attire', 'Wearing of Inappropriate campus attire', '0', '6.3.5'),
(59, 'Misbehavior', ' Misbehavior during school programs, activities or competitions', '0', '6.3.6'),
(60, 'Distribution of unauthorized printed materials', 'Distribution of unauthorized printed materials inside the campus', '0', '6.3.7'),
(61, 'Disturbance or disruption of the educational environment', 'Disturbance or disruption of the educational environment, classes or any education related programs or activities', '1', '6.3.8'),
(62, 'Disrespect for DWCL', 'Disrespect for DWCL symbols or National Symbols', '0', '6.3.9'),
(63, ' Littering', ' Littering and/or improper disposal of waste materials', '0', '6.3.10'),
(64, 'Hair length Policy', 'Violation of “hair length” policy for male students', '0', '6.3.11'),
(65, 'Wearing caps', 'Wearing caps or bonnets inside the campus', '0', '6.3.12'),
(66, 'Tampering the ID', 'Tampering the ID (using another picture or drawing marks on ID)', '0', '6.3.13'),
(67, 'Wearing the ID underneath', 'Wearing the ID underneath one’s shirt, jacket, etc.', '0', '6.3.14'),
(68, 'Unauthorized posting', 'Unauthorized posting of announcements', '0', '6.3.15');

-- --------------------------------------------------------

--
-- Table structure for table `offense_suggestion`
--

CREATE TABLE `offense_suggestion` (
  `id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `offense_id` int(11) NOT NULL,
  `points` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offense_suggestion`
--

INSERT INTO `offense_suggestion` (`id`, `description`, `offense_id`, `points`) VALUES
(15, 'nakaw', 15, 0),
(16, 'steal', 15, 0),
(17, 'nanapak', 16, 0),
(18, 'suntukan', 16, 1),
(19, 'burungagan', 16, 1),
(20, 'bungag', 16, 0),
(21, 'crime', 16, 0),
(22, 'injury', 16, 0),
(23, 'sabunutan', 16, 0),
(24, 'sabunot', 16, 0),
(25, 'sapak', 16, 0),
(26, 'sinapak', 16, 0),
(27, 'document', 15, 0),
(28, 'documents', 15, 0),
(29, 'name', 15, 0),
(30, 'school', 15, 0),
(31, 'record', 15, 0),
(32, 'credentials', 15, 0),
(33, 'certifcate', 15, 0),
(34, 'official', 15, 0),
(35, 'direct', 17, 0),
(36, 'indirect', 17, 0),
(37, 'assault', 17, 1),
(38, 'injury', 17, 0),
(39, 'physical', 17, 0),
(40, 'verbal', 17, 0),
(41, 'suntukan', 17, 0),
(42, 'suntok', 17, 0),
(43, 'burungagan', 17, 0),
(44, 'crime', 17, 0),
(45, 'damage', 18, 0),
(46, 'vandal', 18, 0),
(47, 'vandalism', 18, 0),
(48, 'destruction', 18, 0),
(49, 'campus', 18, 0),
(50, 'sira', 18, 0),
(51, 'sinira', 18, 0),
(52, 'destroy', 18, 0),
(53, 'school', 18, 0),
(54, 'student', 18, 0),
(55, 'drugs', 19, 0),
(56, 'drug', 19, 0),
(57, 'droga', 19, 0),
(58, 'benta', 19, 0),
(59, 'drug pusher', 19, 0),
(60, 'firearms', 20, 0),
(61, 'weapon', 20, 0),
(62, 'kutsilyo', 20, 0),
(63, 'school', 20, 0),
(64, 'drug', 20, 0),
(65, 'device', 20, 0),
(66, 'baril', 20, 0),
(67, 'harm', 20, 0),
(68, 'hostage', 20, 0),
(69, 'destroy', 20, 0),
(70, 'funds', 21, 0),
(71, 'collect', 21, 0),
(72, 'disbursement', 21, 0),
(73, 'student', 21, 0),
(74, 'steal', 21, 0),
(75, 'get', 21, 0),
(76, 'collection', 21, 0),
(77, 'collected', 21, 0),
(78, 'sexual', 22, 0),
(79, 'harassment', 22, 0),
(80, 'steal', 22, 0),
(81, 'stealing', 22, 0),
(82, 'student', 22, 0),
(83, 'touch', 22, 0),
(84, 'hinawakan', 22, 0),
(85, 'affair', 23, 1),
(86, 'relasyon', 23, 0),
(87, 'relationship', 23, 0),
(88, 'prof', 23, 0),
(89, 'student', 23, 0),
(90, 'Away', 24, 0),
(91, 'gyera', 24, 0),
(92, 'rambol', 24, 0),
(93, 'gulo', 24, 0),
(94, 'attack', 24, 0),
(95, 'authority', 24, 0),
(96, 'personnel', 24, 0),
(97, 'hazing', 25, 0),
(98, 'group', 25, 0),
(99, 'injured', 25, 0),
(100, 'harm', 25, 0),
(101, 'suntok', 25, 0),
(102, 'suntukan', 25, 0),
(103, 'abuse', 25, 0),
(104, 'danger', 25, 0),
(105, 'participate', 25, 0),
(106, 'school', 26, 0),
(107, 'information', 26, 0),
(108, 'incorrect', 26, 0),
(109, 'injury', 27, 0),
(110, 'behavior', 27, 0),
(111, 'fire alarm', 27, 0),
(112, 'harm', 27, 0),
(113, 'ledges', 27, 0),
(114, 'fire extinguisher', 27, 0),
(115, 'document', 28, 0),
(116, 'physical', 28, 0),
(117, 'social media', 28, 0),
(118, 'falsifying', 28, 0),
(119, 'document', 29, 0),
(120, 'plagiarism', 29, 0),
(121, 'illegal', 29, 0),
(122, 'printed', 29, 0),
(123, 'forgery', 30, 0),
(124, 'cybercrime', 31, 0),
(125, 'violation', 32, 0),
(126, 'data privacy', 32, 0),
(127, 'privacy', 32, 0),
(128, 'data', 32, 0),
(129, 'violation', 33, 7),
(130, 'photo', 33, 0),
(131, 'video', 33, 0),
(132, 'violent', 34, 0),
(133, 'film', 34, 0),
(134, 'picture', 34, 0),
(135, 'dissemination', 34, 0),
(136, 'upload', 34, 0),
(137, 'download', 34, 0),
(138, 'social media', 34, 0),
(139, 'destroy', 35, 0),
(140, 'damage', 35, 0),
(141, 'property', 35, 0),
(142, 'theft', 36, 0),
(143, 'nakaw', 36, 3),
(144, 'property', 36, 0),
(145, 'ninakaw', 36, 0),
(146, 'institution', 36, 0),
(147, 'solicitation', 37, 0),
(148, 'collection', 37, 0),
(149, 'donation', 37, 0),
(150, 'peace', 38, 0),
(151, 'nakaw', 15, 0);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `landmark` varchar(255) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `offense_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `pic_id` int(11) NOT NULL,
  `offense_level` int(11) NOT NULL,
  `department` int(11) NOT NULL,
  `date_incident` date NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `pending` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `description`, `landmark`, `date_added`, `offense_id`, `student_id`, `pic_id`, `offense_level`, `department`, `date_incident`, `faculty_id`, `status`, `pending`) VALUES
(134, 'Ninakaw ni rain wallet ni yen', 'Room 212', '2021-10-25 16:00:39', 36, 44, 136, 0, 0, '2021-10-25', 65, 0, 0),
(135, ' Sinuntok ni dustine si eric ', 'Room 211', '2021-10-25 16:09:30', 16, 44, 137, 0, 0, '2021-10-20', 75, 0, 0),
(136, 'sd', 'Room 211', '2021-10-25 16:10:36', 16, 44, 138, 0, 0, '2021-10-25', 66, 0, 0),
(137, 'gasd', 'Room 212', '2021-10-25 16:10:54', 23, 44, 0, 0, 0, '2021-10-25', 73, 0, 0),
(138, '  df  ', '34', '2021-10-31 02:11:45', 17, 39, 140, 0, 0, '2021-10-30', 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sao`
--

CREATE TABLE `sao` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `account_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sao`
--

INSERT INTO `sao` (`id`, `fullname`, `contact`, `account_id`) VALUES
(1, 'Allan Albaytar', '09272523253', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `id_no` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `department` int(11) NOT NULL,
  `pic_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `lname`, `fname`, `mname`, `id_no`, `email`, `contact`, `course`, `year`, `address`, `status`, `account_id`, `department`, `pic_id`) VALUES
(39, 'Ereneio Garcia', '', '', '', '', '09586958684', 'BSIT-4', 0, 'Libon, Albay', 1, 135, 0, 117),
(40, 'Adelyn Oarde', '', '', '', '', '09463546354', 'BSIT-4', 0, 'Camalig, Albay', 0, 136, 0, 118),
(43, 'Pearly Banico', '', '', '', '', '09595747499', 'BSIT-3', 0, 'Sto Domingo, Albay', 0, 139, 0, 121),
(44, 'Angela Leano', '', '', '', '', '09574637485', 'BSIT-4', 0, 'Irosin, Sorsogon', 0, 140, 0, 122),
(45, 'Joanna Murillo', '', '', '', '', '09947456273', 'BSIT-2', 0, 'Camalig, Albay', 0, 141, 0, 123),
(46, 'Ana Marie Gabarda', '', '', '', '', '09482363412', 'BSIT-4', 0, 'San Vicente, Tabaco City', 0, 142, 0, 124),
(47, 'Gabriel Nicoleta', '', '', '', '', '09657453546', 'BSIT-4', 0, 'Daraga, Albay', 0, 143, 0, 125),
(48, 'Dustine Eser', '', '', '', '', '09098764324', 'BSIT-4', 0, 'Washington, Albay', 0, 144, 0, 126),
(49, 'Christian Eric Alarzar', '', '', '', '', '0957685768', 'BSIT-4', 0, 'Washington, Albay', 0, 145, 1, 127),
(50, 'Jebulan', 'Jo Bernadette', 'M', '07235234', 'adee@gmail.com', '09909865432', '3', 3, 'Washington, Albay', 0, 146, 0, 128),
(51, 'Louis Jane Lita', '', '', '', '', '09098789876', 'BSBA-4', 0, 'Donsol, Sorsogon', 0, 147, 0, 129),
(55, 'z', 'z', 'z', '3', '3@gmail.com', '09774256218', '0', 3, 'sa', 0, 0, 0, 0),
(56, 'z', 'z', 'z', '34', '34@gmail.com', '09774256218', '0', 3, 'sa', 0, 153, 0, 139);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offense_list`
--
ALTER TABLE `offense_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offense_suggestion`
--
ALTER TABLE `offense_suggestion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sao`
--
ALTER TABLE `sao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT for table `offense_list`
--
ALTER TABLE `offense_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `offense_suggestion`
--
ALTER TABLE `offense_suggestion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT for table `sao`
--
ALTER TABLE `sao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
