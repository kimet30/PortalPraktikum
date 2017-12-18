-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2017 at 02:13 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_webs`
--

-- --------------------------------------------------------

--
-- Table structure for table `_absen`
--

CREATE TABLE `_absen` (
  `id_matkul` varchar(12) NOT NULL,
  `npm` varchar(12) NOT NULL,
  `id_semester` int(11) DEFAULT NULL,
  `pert1` tinyint(1) DEFAULT NULL,
  `pert2` tinyint(1) DEFAULT NULL,
  `pert3` tinyint(1) DEFAULT NULL,
  `pert4` tinyint(1) DEFAULT NULL,
  `pert5` tinyint(1) DEFAULT NULL,
  `pert6` tinyint(1) DEFAULT NULL,
  `pert7` tinyint(1) DEFAULT NULL,
  `pert8` tinyint(1) DEFAULT NULL,
  `pert9` tinyint(1) DEFAULT NULL,
  `pert10` tinyint(1) DEFAULT NULL,
  `pert11` tinyint(1) DEFAULT NULL,
  `pert12` tinyint(1) DEFAULT NULL,
  `pert13` tinyint(1) DEFAULT NULL,
  `pert14` tinyint(1) DEFAULT NULL,
  `pert15` tinyint(1) DEFAULT NULL,
  `pert16` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_absen`
--

INSERT INTO `_absen` (`id_matkul`, `npm`, `id_semester`, `pert1`, `pert2`, `pert3`, `pert4`, `pert5`, `pert6`, `pert7`, `pert8`, `pert9`, `pert10`, `pert11`, `pert12`, `pert13`, `pert14`, `pert15`, `pert16`) VALUES
('D10A.0400303', '140810140016', 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('D10K-1001', '140810140016', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('D10K-1003', '140810140016', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('D10K-2001', '140810140016', 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('D10K-2002', '140810140016', 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('D10K-3002', '140810140016', 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('D10K-3003', '140810140016', 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('D10K-4001', '140810140016', 4, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('D10K-4002', '140810140016', 4, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('D10K-4003', '140810140016', 4, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('D10A.0400303', '140810140019', 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('D10K-1001', '140810140019', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('D10K-1003', '140810140019', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('D10K-2001', '140810140019', 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('D10K-2002', '140810140019', 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('D10K-3002', '140810140019', 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('D10K-3003', '140810140019', 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('D10K-4001', '140810140019', 4, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('D10K-4002', '140810140019', 4, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('D10K-4003', '140810140019', 4, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('D10A.0400303', '140810140036', 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('D10K-1001', '140810140036', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('D10K-1003', '140810140036', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('D10K-2001', '140810140036', 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('D10K-2002', '140810140036', 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('D10K-3002', '140810140036', 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('D10K-3003', '140810140036', NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('D10K-4001', '140810140036', 4, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('D10K-4002', '140810140036', 4, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('D10K-4003', '140810140036', 4, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `_assistant`
--

CREATE TABLE `_assistant` (
  `id_assistant` varchar(13) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `angkatan` int(11) NOT NULL,
  `prodi` varchar(18) DEFAULT NULL,
  `noHp` varchar(13) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `photo` blob,
  `admin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_assistant`
--

INSERT INTO `_assistant` (`id_assistant`, `nama`, `angkatan`, `prodi`, `noHp`, `email`, `alamat`, `password`, `photo`, `admin`) VALUES
('A140810140001', 'Delia Hayatul Millah', 2014, 'Teknik Informatika', '081234567890', 'delia@gmail.com', 'Purwakarta', '25d55ad283aa400af464c76d713c07ad', 0x89504e470d0a1a0a0000000d49484452000001c2000001c208030000004bc6397700000090504c5445e2e2e2acacace1e1e1aeaeaedfdfdfafafafdadadac5c5c5b1b1b1d5d5d5bbbbbbb3b3b3cececed9d9d9b9b9b9c7c7c7c2c2c2b0b0b0c4c4c4d0d0d0d3d3d3bebebeb8b8b8cacacab4b4b4c0c0c0c3c3c3b6b6b6d6d6d6bdbdbdcbcbcbd8d8d8b5b5b5c1c1c1dcdcdcd1d1d1bcbcbcd4d4d4dededecdcdcdabababadadade0e0e0cfcfcfc8c8c8bababadbdbdbc9c9c935ab518e0000099149444154785eecceb91184400c00b0abc4dee5ffafffee088908c86046aa40bf47000000000000000000000000000000000000000000000000000000000000000000005832d7887ad962cc6c3e3067e8a376659e6e94bdfedbe3a5774ef6ee452971250c02704f12ae8a8820a8ab5c04632702beffdb9daaadadadda3dea8a72994efa7b855465fedbfcf338bcdb34f819c578f1dc44546c3bbd6e73376977dd4114ac5c5eb6f935e9ea3cc7695976de0dfc961feb479c8a952fddc03d184f729c80cd2e53ee4b588d705c564ee7dcaf413fc7d158de4ab97fe1b687a3b0e6a2e081749f7070d6bc0d3ca071070765dbdbc003bbe8e060acbc0a3c82d5168761c3368fa35827d83f6b6e783c674fd8332b5b8147f590639f6cd9e6b115af09f6c5b2154fe1a687fdb0ce80a7514cb10fd60f3c995589efb27cc3533a9be17beca9c1d30a137c8325fdc0935b65f82acb2e1883760f5f638f378c43dac15758b3cd581443ecceee53c6234cb12b1b158c4a1fbbb1e7c0c82c12ecc0d68ccf2ac1a7598b31da94f824eb334edd049f6213fe24fb2fb567c6eb1aff66cbc0885de15fecbe60d4a6f898351b8c5b58e223969d3176c50cefb364c3f8b573bccb5a547091e01db6a4863bbccd9a29450cf1164be654916ef106bba28e7182ffb1a740217dfccdb20195840efe62d7d47296e00f36e25b740ade56b6a926fc5168b34bea9927f8cd668182a6f8cdc6549466f8c5cea969819f0ce5803fc94634b6a6aa0b18006429653dc100b4a86b0c03f282c24630dc51d91c961794b6844f426a73505a36286e869a9b52dd03ea2d39a3bab075a7579a7bbf2bea6b24a8b13c501f872e70abdba0c6cea8cd01cd3dab61edf2a82c174adbac88266aaac3aa587b7854dd8dffa3f2b6a8a52dab63ea268524b72bbaac8e34410d95052ba4e394425ddf256e755d1f85827c18a6ac941e6aa74971ce0c5f582d0bef7a52377634a3ae708d5b8d2bdd19ab66e9b119756b07a4ea2e5d5e13e369d205c579f8624371ce2a6e583939eaa541712e74076af31aa192d533f400a2ba67d4ca8ce25c9ee9f813aa5bb27a5afe8452bcf962c8eab9f3366e259e9ef127d437f45928cee18cbe91930a014eedd5b8c0f60a792e73cb73b3a95e0ab77cd50d28ce5bbce6ac9ccc179bc4a5debf26c61b2d5f29ce3b2f96be16131b976726a89932b062465e8eafeed1efc4886ba076fa14e7770c870e48e3e276d339ea67e022b7ba074733ea26ac92156a68e6da8cba24f5457b75d73e0ae3e17b15d738296786ce0abd3e2864a8a796b73aabeb39a58884ffa421475df5dd6852d7f33323f2e68e47d54d9dd7abcb0a5f6952774b7d67a8b57bdfb197f783ea8a1cf5f6e2d13575499bda42137537f1d08cba32a5b47b589fca3630940d0a9bc18057f593d0ca0155851e0c00a6ea056e4be6d4543c429bb793aea1cd83dd8304bf18b685fafcafadbdeec911cda963199b05f5b1356b51cb18da9c1c165bfccd7a85fa3a7c9b50c703b479d9733bc35b2c6f5343e8409b338b29de63cf54708bf7d982f19b97789f25178cdde0111fb1ec86712b7af8983d3618b3b0c4bfd87da11e8cdaa860b4faf80c5b06f517976d18d4efa1d979608416f83c7b098cce1d7661cb42fd1cb4a7427decd7ee1b8c4778c6ee6c7bc358fcc7bebdee280a4441003e0db60d2ade571d2636cd20ec9199c6f77fbbfdb9fb631333d21726a9ef152a39c949aad2965e01bde569c8e6f41a48b63c05eb8e5e06879463132aa11160301c976c691c484a8ec976341a3429c72236e4020c278e6397931b9028c111dc3a7206e696435b1ec92938ec38a4fb2621c7a0df0b0e6631900750ac398c65439ec04ab27f77d59337d09fa5ef00b71d7905fd57cafe88fa83bc83fe9cb11f69192a40f87c67f7b2734fe140fe7667a7ec21a1b060a60dbbb253712e28146ac9e3c9baa578a01a99a27c3b526c30e8c59d5fb2de54340d90b45f0bc9df21d6aa99d1b4c0fc7769253f773fd53aa7a9822ed7aa363bfe9fd45cb7fa38d0cf0055d5eabf9aaa7af2b703000000000000000000000000000000c050ad745d5b63cc3f132863cca9ae1f3a2f68baa0fa54bf4cc6cfa46651ea893569a06bd4edc2dfb3b3dbd59ce283247f5c337e556ae31682a1da58c1a35df6c79ec2830f7d4bd9156103af2b60d8bcb36bd9bea530a05017f643d647f20dbac7857d926541fe40d22c047b67ce33f20286527218e29a9373d0defeb073773bc903511486f7ccb4430dfd0a8a25f095502249bba60adeffdd79d2181334fc4860b65dcf2dbcd907eb64e39636ad952ba2ae5de0d6d251235742c9c4e11eccd2cb155032ea033222035ea4fcd5c8a06e147077a5970b915d3bc4c04c13b904cdc688857bebe45c54cf11932c97b35032456c0a2fa7a33c457cccc96fd7c9178853b69513909d1844ab4ce418f2156296ce8e04a0f7809eca43a47d81f83d3ecb4f280f50e1bf95ef50b78416d55e0e915f400f77382fa80d50656ae52bb24b6853bdc82792660e7dd295f448ea0c1a99b60f40af013af5eb829ea0d7ae13b22534db34dcf33be8967919b6a682766e2543e6c7d02f6c65b8fea5f80b4c2e43552b2fc881583b800d5930166b199e07e505d9b0761feddcdb72da401004d0d9d5c5020131179b10c720038196c0e4ffff2e0fa94ad9651bfb210fead93eff4089ee991d3873b4b49405bc09734bc9760a7fc2c2d271a8e1513bb054e40d7ccac69686388157c5d692700bbf9ace1270846777e6df20c0b5b379b72d404dd1a26be05d569a6b8ff0afcecdb13352308ce6d62e200933f3aacc908891f994d74845bb3197f6484795ab95e91fb534658ba49ccc9bf880b4641773e606a9994495db7da2c23bd6484f28f50a94dd7d34373601495a9a17b1419ada8be613ec9ecd8732809bfaee21d235edcc811d5236532464174aed5ab01b1abb6d8bc4ed8cdc0aa9aba37a19766bf640c14dc1e217c869ea740f01b2dc682d20007063b41a0800b407f61fa1cc8cd404dcf4351ce02f01ceec99508ace088d414e15cd1dfe1154d1e81c025e90b9d1f9869764626c628157646c644e784d9ed863bdb4397ba29025fbb543f96e4c628637646344e6784b6ed9ef9348118d461ec04d2ba54bbc47f646e301dc140d2f789f1cd95fc2c8907d7b5442cefe7f544646618d8fc823fbda93b49d11e85a7053badfe163f2c3083c819c264e15ae9083f55e896b64c41e2964c5bec42d95f5de1457494930a5e0a669c508d7c98a3d154a4d7f214172ebb52ee013b2b05efb89cfc8997d774df6ecb72ba5665f3f94d0598fc5169f92017b37236bf689bdccd89780e599bd5e938afd48828468fd55e30b646bfd15c04da9e200725a811a809c8aee13c8e996d76f90d34bd119be421af65193d4ec178324b3ffe90fea393163fb8bb0db0000000049454e44ae426082, 0),
('A140810140021', 'Ferina Dewi', 2014, 'Teknik Informatika', '81220058838', 'ferin@live.com', 'Bandung', '25d55ad283aa400af464c76d713c07ad', NULL, 0),
('A140810140028', 'Agung Kurniawan', 2014, 'Teknik Informatika', '81220058838', 'agung@gmail.com', 'Solok', '25d55ad283aa400af464c76d713c07ad', NULL, 0),
('A140810140070', 'Asep Nur Muhammad', 2014, 'Teknik Informatika', '81220058838', 'asep@live.com', 'Purwakarta', '25d55ad283aa400af464c76d713c07ad', 0x89504e470d0a1a0a0000000d49484452000001c2000001c208030000004bc6397700000090504c5445e2e2e2acacace1e1e1aeaeaedfdfdfafafafdadadac5c5c5b1b1b1d5d5d5bbbbbbb3b3b3cececed9d9d9b9b9b9c7c7c7c2c2c2b0b0b0c4c4c4d0d0d0d3d3d3bebebeb8b8b8cacacab4b4b4c0c0c0c3c3c3b6b6b6d6d6d6bdbdbdcbcbcbd8d8d8b5b5b5c1c1c1dcdcdcd1d1d1bcbcbcd4d4d4dededecdcdcdabababadadade0e0e0cfcfcfc8c8c8bababadbdbdbc9c9c935ab518e0000099149444154785eecceb91184400c00b0abc4dee5ffafffee088908c86046aa40bf47000000000000000000000000000000000000000000000000000000000000000000005832d7887ad962cc6c3e3067e8a376659e6e94bdfedbe3a5774ef6ee452971250c02704f12ae8a8820a8ab5c04632702beffdb9daaadadadda3dea8a72994efa7b855465fedbfcf338bcdb34f819c578f1dc44546c3bbd6e73376977dd4114ac5c5eb6f935e9ea3cc7695976de0dfc961feb479c8a952fddc03d184f729c80cd2e53ee4b588d705c564ee7dcaf413fc7d158de4ab97fe1b687a3b0e6a2e081749f7070d6bc0d3ca071070765dbdbc003bbe8e060acbc0a3c82d5168761c3368fa35827d83f6b6e783c674fd8332b5b8147f590639f6cd9e6b115af09f6c5b2154fe1a687fdb0ce80a7514cb10fd60f3c995589efb27cc3533a9be17beca9c1d30a137c8325fdc0935b65f82acb2e1883760f5f638f378c43dac15758b3cd581443ecceee53c6234cb12b1b158c4a1fbbb1e7c0c82c12ecc0d68ccf2ac1a7598b31da94f824eb334edd049f6213fe24fb2fb567c6eb1aff66cbc0885de15fecbe60d4a6f898351b8c5b58e223969d3176c50cefb364c3f8b573bccb5a547091e01db6a4863bbccd9a29450cf1164be654916ef106bba28e7182ffb1a740217dfccdb20195840efe62d7d47296e00f36e25b740ade56b6a926fc5168b34bea9927f8cd668182a6f8cdc6549466f8c5cea969819f0ce5803fc94634b6a6aa0b18006429653dc100b4a86b0c03f282c24630dc51d91c961794b6844f426a73505a36286e869a9b52dd03ea2d39a3bab075a7579a7bbf2bea6b24a8b13c501f872e70abdba0c6cea8cd01cd3dab61edf2a82c174adbac88266aaac3aa587b7854dd8dffa3f2b6a8a52dab63ea268524b72bbaac8e34410d95052ba4e394425ddf256e755d1f85827c18a6ac941e6aa74971ce0c5f582d0bef7a52377634a3ae708d5b8d2bdd19ab66e9b119756b07a4ea2e5d5e13e369d205c579f8624371ce2a6e583939eaa541712e74076af31aa192d533f400a2ba67d4ca8ce25c9ee9f813aa5bb27a5afe8452bcf962c8eab9f3366e259e9ef127d437f45928cee18cbe91930a014eedd5b8c0f60a792e73cb73b3a95e0ab77cd50d28ce5bbce6ac9ccc179bc4a5debf26c61b2d5f29ce3b2f96be16131b976726a89932b062465e8eafeed1efc4886ba076fa14e7770c870e48e3e276d339ea67e022b7ba074733ea26ac92156a68e6da8cba24f5457b75d73e0ae3e17b15d738296786ce0abd3e2864a8a796b73aabeb39a58884ffa421475df5dd6852d7f33323f2e68e47d54d9dd7abcb0a5f6952774b7d67a8b57bdfb197f783ea8a1cf5f6e2d13575499bda42137537f1d08cba32a5b47b589fca3630940d0a9bc18057f593d0ca0155851e0c00a6ea056e4be6d4543c429bb793aea1cd83dd8304bf18b685fafcafadbdeec911cda963199b05f5b1356b51cb18da9c1c165bfccd7a85fa3a7c9b50c703b479d9733bc35b2c6f5343e8409b338b29de63cf54708bf7d982f19b97789f25178cdde0111fb1ec86712b7af8983d3618b3b0c4bfd87da11e8cdaa860b4faf80c5b06f517976d18d4efa1d979608416f83c7b098cce1d7661cb42fd1cb4a7427decd7ee1b8c4778c6ee6c7bc358fcc7bebdee280a4441003e0db60d2ade571d2636cd20ec9199c6f77fbbfdb9fb631333d21726a9ef152a39c949aad2965e01bde569c8e6f41a48b63c05eb8e5e06879463132aa11160301c976c691c484a8ec976341a3429c72236e4020c278e6397931b9028c111dc3a7206e696435b1ec92938ec38a4fb2621c7a0df0b0e6631900750ac398c65439ec04ab27f77d59337d09fa5ef00b71d7905fd57cafe88fa83bc83fe9cb11f69192a40f87c67f7b2734fe140fe7667a7ec21a1b060a60dbbb253712e28146ac9e3c9baa578a01a99a27c3b526c30e8c59d5fb2de54340d90b45f0bc9df21d6aa99d1b4c0fc7769253f773fd53aa7a9822ed7aa363bfe9fd45cb7fa38d0cf0055d5eabf9aaa7af2b703000000000000000000000000000000c050ad745d5b63cc3f132863cca9ae1f3a2f68baa0fa54bf4cc6cfa46651ea893569a06bd4edc2dfb3b3dbd59ce283247f5c337e556ae31682a1da58c1a35df6c79ec2830f7d4bd9156103af2b60d8bcb36bd9bea530a05017f643d647f20dbac7857d926541fe40d22c047b67ce33f20286527218e29a9373d0defeb073773bc903511486f7ccb4430dfd0a8a25f095502249bba60adeffdd79d2181334fc4860b65dcf2dbcd907eb64e39636ad952ba2ae5de0d6d251235742c9c4e11eccd2cb155032ea033222035ea4fcd5c8a06e147077a5970b915d3bc4c04c13b904cdc688857bebe45c54cf11932c97b35032456c0a2fa7a33c457cccc96fd7c9178853b69513909d1844ab4ce418f2156296ce8e04a0f7809eca43a47d81f83d3ecb4f280f50e1bf95ef50b78416d55e0e915f400f77382fa80d50656ae52bb24b6853bdc82792660e7dd295f448ea0c1a99b60f40af013af5eb829ea0d7ae13b22534db34dcf33be8967919b6a682766e2543e6c7d02f6c65b8fea5f80b4c2e43552b2fc881583b800d5930166b199e07e505d9b0761feddcdb72da401004d0d9d5c5020131179b10c720038196c0e4ffff2e0fa94ad9651bfb210fead93eff4089ee991d3873b4b49405bc09734bc9760a7fc2c2d271a8e1513bb054e40d7ccac69686388157c5d692700bbf9ace1270846777e6df20c0b5b379b72d404dd1a26be05d569a6b8ff0afcecdb13352308ce6d62e200933f3aacc908891f994d74845bb3197f6484795ab95e91fb534658ba49ccc9bf880b4641773e606a9994495db7da2c23bd6484f28f50a94dd7d34373601495a9a17b1419ada8be613ec9ecd8732809bfaee21d235edcc811d5236532464174aed5ab01b1abb6d8bc4ed8cdc0aa9aba37a19766bf640c14dc1e217c869ea740f01b2dc682d20007063b41a0800b407f61fa1cc8cd404dcf4351ce02f01ceec99508ace088d414e15cd1dfe1154d1e81c025e90b9d1f9869764626c628157646c644e784d9ed863bdb4397ba29025fbb543f96e4c628637646344e6784b6ed9ef9348118d461ec04d2ba54bbc47f646e301dc140d2f789f1cd95fc2c8907d7b5442cefe7f544646618d8fc823fbda93b49d11e85a7053badfe163f2c3083c819c264e15ae9083f55e896b64c41e2964c5bec42d95f5de1457494930a5e0a669c508d7c98a3d154a4d7f214172ebb52ee013b2b05efb89cfc8997d774df6ecb72ba5665f3f94d0598fc5169f92017b37236bf689bdccd89780e599bd5e938afd48828468fd55e30b646bfd15c04da9e200725a811a809c8aee13c8e996d76f90d34bd119be421af65193d4ec178324b3ffe90fea393163fb8bb0db0000000049454e44ae426082, 0);

-- --------------------------------------------------------

--
-- Table structure for table `_mahasiswa`
--

CREATE TABLE `_mahasiswa` (
  `npm` varchar(12) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `angkatan` int(11) NOT NULL,
  `prodi` varchar(18) DEFAULT NULL,
  `noHp` varchar(13) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `photo` blob,
  `kelas` varchar(2) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_mahasiswa`
--

INSERT INTO `_mahasiswa` (`npm`, `nama`, `angkatan`, `prodi`, `noHp`, `email`, `alamat`, `password`, `photo`, `kelas`, `image`) VALUES
('140810140001', 'Delia Hayatul Millah', 2014, 'Teknik Informatika', '081212345678', 'deliabarbie@gmail.com', 'Purwakarta', '25d55ad283aa400af464c76d713c07ad', NULL, 'A', NULL),
('140810140016', 'Risal Falah', 2013, 'Teknik Informatika', '81220058838', 'asepnur.isk@gmail.com', 'fghjkl;adssadmdasn', '25d55ad283aa400af464c76d713c07ad', 0x30, 'B', ''),
('140810140019', 'Arif Huda', 2014, 'Teknik Informatika', '81220058838', 'Arief@live.com', 'Banten', '25d55ad283aa400af464c76d713c07ad', NULL, 'A', NULL),
('140810140036', 'Ikhwan Yoza', 2015, 'Teknik Informatika', '81220058838', 'yoza@gmail.com', 'Padang', '25d55ad283aa400af464c76d713c07ad', NULL, 'B', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `_matakuliah`
--

CREATE TABLE `_matakuliah` (
  `id_matkul` varchar(12) NOT NULL,
  `nama_matkul` varchar(30) DEFAULT NULL,
  `jum_sks` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_matakuliah`
--

INSERT INTO `_matakuliah` (`id_matkul`, `nama_matkul`, `jum_sks`) VALUES
('D10A.0400303', 'Metode Numerik', 3),
('D10K-1001', 'PTKI', 3),
('D10K-1003', 'Algoritma Pemrograman', 3),
('D10K-2001', 'Struktur Data', 3),
('D10K-2002', 'ORKOM', 3),
('D10K-3002', 'Pemrograman Basis Object', 3),
('D10K-3003', 'Pemrograman Web', 3),
('D10K-4001', 'Artificial Intelegence', 3),
('D10K-4002', 'Basis Data', 3),
('D10K-4003', 'Jaringan Komputer', 3);

-- --------------------------------------------------------

--
-- Table structure for table `_menempati`
--

CREATE TABLE `_menempati` (
  `id_ruangan` varchar(6) NOT NULL,
  `id_matkul` varchar(12) NOT NULL,
  `waktu` time DEFAULT NULL,
  `kelas` varchar(2) NOT NULL,
  `hari` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_menempati`
--

INSERT INTO `_menempati` (`id_ruangan`, `id_matkul`, `waktu`, `kelas`, `hari`) VALUES
('LB-001', 'D10A.0400303', '08:00:00', 'A', 'Jum\'at'),
('LB-001', 'D10A.0400303', '13:00:00', 'B', 'Jum\'at'),
('LB-001', 'D10K-4001', '10:30:00', 'A', 'Senin'),
('LB-001', 'D10K-4001', '10:30:00', 'B', 'Senin'),
('LB-002', 'D10K-4002', '08:00:00', 'A', 'Rabu'),
('LB-002', 'D10K-4002', '10:30:00', 'B', 'Rabu'),
('LB-002', 'D10K-4003', '08:00:00', 'B', 'Rabu'),
('LB-005', 'D10K-1001', '08:00:00', 'A', 'Jum\'at'),
('LB-005', 'D10K-1001', '13:00:00', 'B', 'Jum\'at'),
('LB-005', 'D10K-1003', '08:00:00', 'A', 'Selasa'),
('LB-005', 'D10K-1003', '10:00:00', 'B', 'Selasa'),
('LB-005', 'D10K-2001', '08:00:00', 'A', 'Rabu'),
('LB-005', 'D10K-2001', '10:30:00', 'B', 'Rabu'),
('LB-005', 'D10K-2002', '08:00:00', 'A', 'Kamis'),
('LB-005', 'D10K-2002', '08:00:00', 'B', 'Rabu'),
('LB-005', 'D10K-3003', '13:00:00', 'A', 'Kamis'),
('LB-005', 'D10K-3003', '10:00:00', 'B', 'Kamis'),
('LB-005', 'D10K-4003', '13:00:00', 'A', 'Rabu'),
('LB-006', 'D10K-3002', '08:00:00', 'A', 'Selasa'),
('LB-006', 'D10K-3002', '10:00:00', 'B', 'Selasa');

-- --------------------------------------------------------

--
-- Table structure for table `_mengajar`
--

CREATE TABLE `_mengajar` (
  `id_assistant` varchar(13) NOT NULL,
  `id_matkul` varchar(12) NOT NULL,
  `id_semester` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_mengajar`
--

INSERT INTO `_mengajar` (`id_assistant`, `id_matkul`, `id_semester`) VALUES
('A140810140001', 'D10K-2002', 2),
('A140810140028', 'D10K-2001', 2),
('A140810140070', 'D10K-2002', 2),
('A140810140021', 'D10K-4003', 3),
('A140810140001', 'D10K-4002', 4),
('A140810140021', 'D10K-4001', 4),
('A140810140028', 'D10K-4001', 4),
('A140810140070', 'D10K-4002', 4);

-- --------------------------------------------------------

--
-- Table structure for table `_mengambil`
--

CREATE TABLE `_mengambil` (
  `npm` varchar(12) NOT NULL,
  `id_matkul` varchar(12) NOT NULL,
  `id_semester` int(11) NOT NULL,
  `thn_akademik_awal` year(4) DEFAULT NULL,
  `thn_akademik_akhir` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_mengambil`
--

INSERT INTO `_mengambil` (`npm`, `id_matkul`, `id_semester`, `thn_akademik_awal`, `thn_akademik_akhir`) VALUES
('140810140016', 'D10A.0400303', 3, NULL, NULL),
('140810140016', 'D10K-1001', 1, NULL, NULL),
('140810140016', 'D10K-1003', 1, NULL, NULL),
('140810140016', 'D10K-2001', 2, NULL, NULL),
('140810140016', 'D10K-2002', 2, NULL, NULL),
('140810140016', 'D10K-3002', 3, NULL, NULL),
('140810140016', 'D10K-3003', 3, NULL, NULL),
('140810140016', 'D10K-4001', 4, NULL, NULL),
('140810140016', 'D10K-4002', 4, NULL, NULL),
('140810140016', 'D10K-4003', 4, NULL, NULL),
('140810140019', 'D10A.0400303', 3, NULL, NULL),
('140810140019', 'D10K-1001', 1, NULL, NULL),
('140810140019', 'D10K-1003', 1, NULL, NULL),
('140810140019', 'D10K-2001', 2, NULL, NULL),
('140810140019', 'D10K-2002', 2, NULL, NULL),
('140810140019', 'D10K-3002', 3, NULL, NULL),
('140810140019', 'D10K-3003', 3, NULL, NULL),
('140810140019', 'D10K-4001', 4, NULL, NULL),
('140810140019', 'D10K-4002', 4, NULL, NULL),
('140810140019', 'D10K-4003', 4, NULL, NULL),
('140810140036', 'D10A.0400303', 3, NULL, NULL),
('140810140036', 'D10K-1001', 1, NULL, NULL),
('140810140036', 'D10K-1003', 1, NULL, NULL),
('140810140036', 'D10K-2001', 2, NULL, NULL),
('140810140036', 'D10K-2002', 2, NULL, NULL),
('140810140036', 'D10K-3002', 3, NULL, NULL),
('140810140036', 'D10K-3003', 3, NULL, NULL),
('140810140036', 'D10K-4001', 4, NULL, NULL),
('140810140036', 'D10K-4002', 4, NULL, NULL),
('140810140036', 'D10K-4003', 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `_mengerjakan_tugas`
--

CREATE TABLE `_mengerjakan_tugas` (
  `npm` varchar(12) NOT NULL,
  `id_tugas` int(11) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `tanggal_kirim` date DEFAULT NULL,
  `id_semester` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_mengerjakan_tugas`
--

INSERT INTO `_mengerjakan_tugas` (`npm`, `id_tugas`, `status`, `tanggal_kirim`, `id_semester`) VALUES
('140810140016', 1, 1, '0000-00-00', 4),
('140810140016', 2, 1, '0000-00-00', 4),
('140810140016', 3, 1, '2016-06-15', 4),
('140810140016', 4, 1, '2016-06-15', 4),
('140810140016', 5, 1, '2016-06-01', 4),
('140810140016', 6, 0, NULL, 4),
('140810140016', 26, 0, NULL, 4),
('140810140019', 1, 1, '0000-00-00', 4),
('140810140019', 2, 1, '2016-05-28', 4),
('140810140019', 3, 1, '2016-06-01', 4),
('140810140019', 4, 1, '0000-00-00', 4),
('140810140019', 5, 1, '2016-05-28', 4),
('140810140019', 6, 1, '2016-05-28', 4),
('140810140019', 26, 0, NULL, 4),
('140810140036', 1, 1, '0000-00-00', 4),
('140810140036', 2, 1, '0000-00-00', 4),
('140810140036', 3, 1, '0000-00-00', 4),
('140810140036', 4, 1, '0000-00-00', 4),
('140810140036', 5, 1, '2016-06-01', 4),
('140810140036', 6, 0, NULL, 4),
('140810140036', 26, 0, NULL, 4);

-- --------------------------------------------------------

--
-- Table structure for table `_nilai`
--

CREATE TABLE `_nilai` (
  `id_matkul` varchar(12) NOT NULL,
  `npm` varchar(12) NOT NULL,
  `nilai_kuis` float DEFAULT NULL,
  `nilai_tugas` float DEFAULT NULL,
  `nilai_uts` float DEFAULT NULL,
  `nilai_uas` float DEFAULT NULL,
  `id_semester` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_nilai`
--

INSERT INTO `_nilai` (`id_matkul`, `npm`, `nilai_kuis`, `nilai_tugas`, `nilai_uts`, `nilai_uas`, `id_semester`) VALUES
('D10A.0400303', '140810140016', 50, 50, 50, 50, 3),
('D10K-1001', '140810140016', 90, 90, 90, 90, 1),
('D10K-1003', '140810140016', 80, 81, 82, 83, 1),
('D10K-2001', '140810140016', 70, 71, 90, 73, 2),
('D10K-2002', '140810140016', 90, 91, 92, 93, 2),
('D10K-3002', '140810140016', 78, 78, 78, 78, 3),
('D10K-3003', '140810140016', 80, 80, 80, 80, 3),
('D10K-4001', '140810140016', 78, 78, NULL, NULL, 4),
('D10K-4002', '140810140016', 83, 93, NULL, NULL, 4),
('D10K-4003', '140810140016', 80, 90, NULL, NULL, 4),
('D10A.0400303', '140810140019', 50, 50, 50, 50, 3),
('D10K-1001', '140810140019', 92, 92, 92, 92, 1),
('D10K-1003', '140810140019', 82, 83, 84, 85, 1),
('D10K-2001', '140810140019', 72, 73, 92, 75, 2),
('D10K-2002', '140810140019', 90, 93, 94, 95, 2),
('D10K-3002', '140810140019', 78, 78, 78, 78, 3),
('D10K-3003', '140810140019', 82, 82, 82, 82, 3),
('D10K-4001', '140810140019', 78, 78, NULL, NULL, 4),
('D10K-4002', '140810140019', 85, 95, NULL, NULL, 4),
('D10K-4003', '140810140019', 82, 92, NULL, NULL, 4),
('D10A.0400303', '140810140036', 50, 50, 50, 50, 3),
('D10K-1001', '140810140036', 91, 91, 91, 91, 1),
('D10K-1003', '140810140036', 81, 82, 83, 84, 1),
('D10K-2001', '140810140036', 71, 72, 91, 74, 2),
('D10K-2002', '140810140036', 90, 92, 93, 94, 2),
('D10K-3002', '140810140036', 78, 78, 78, 78, 3),
('D10K-3003', '140810140036', 81, 81, 81, 81, 3),
('D10K-4001', '140810140036', 78, 78, NULL, NULL, 4),
('D10K-4002', '140810140036', 84, 94, NULL, NULL, 4),
('D10K-4003', '140810140036', 81, 91, NULL, NULL, 4);

-- --------------------------------------------------------

--
-- Table structure for table `_ruangan`
--

CREATE TABLE `_ruangan` (
  `id_ruangan` varchar(6) NOT NULL,
  `nama_ruangan` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_ruangan`
--

INSERT INTO `_ruangan` (`id_ruangan`, `nama_ruangan`) VALUES
('LB-001', 'LAB AIO'),
('LB-002', 'LAB Dasar'),
('LB-003', 'LAB IMAC'),
('LB-004', 'LAB Robotik'),
('LB-005', 'LAB Komputasi'),
('LB-006', 'LAB Murni');

-- --------------------------------------------------------

--
-- Table structure for table `_semester`
--

CREATE TABLE `_semester` (
  `id_semester` int(11) NOT NULL,
  `semester` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_semester`
--

INSERT INTO `_semester` (`id_semester`, `semester`) VALUES
(1, 'Semester 1'),
(2, 'Semester 2'),
(3, 'Semester 3'),
(4, 'Semester 4');

-- --------------------------------------------------------

--
-- Table structure for table `_tugas`
--

CREATE TABLE `_tugas` (
  `id_tugas` int(11) NOT NULL,
  `id_assistant` varchar(13) NOT NULL,
  `nama_tugas` varchar(50) DEFAULT NULL,
  `teks_ket` text,
  `file` varchar(50) DEFAULT NULL,
  `tanggal_tugas` datetime DEFAULT NULL,
  `deadline` datetime DEFAULT NULL,
  `kategori` varchar(20) DEFAULT NULL,
  `id_matkul` varchar(12) DEFAULT NULL,
  `id_semester` int(11) DEFAULT NULL,
  `url` text,
  `nama_url` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_tugas`
--

INSERT INTO `_tugas` (`id_tugas`, `id_assistant`, `nama_tugas`, `teks_ket`, `file`, `tanggal_tugas`, `deadline`, `kategori`, `id_matkul`, `id_semester`, `url`, `nama_url`) VALUES
(1, 'A140810140070', 'Tugas 5 Basisdata', 'asdasdsak afkasfmlkasdfmaklsdf ', NULL, '2016-06-03 12:12:00', '2016-06-04 12:12:00', 'Laprak', 'D10K-1001', NULL, 'asdsad', 'asasda'),
(2, 'A140810140028', 'Tugas 1 AI', 'Sed in sollicitudin lacus. Praesent id lorem massa. Curabitur nec urna iaculis, luctus lectus non, suscipit nulla. Nunc ut pulvinar lorem, sed suscipit nisi. Etiam sollicitudin nibh faucibus lorem placerat efficitur. Curabitur rhoncus neque lacinia porta posuere. Quisque mattis convallis sollicitudin. In commodo viverra ante, aliquam tincidunt ex. Vivamus rutrum neque nec metus auctor iaculis. Ut tristique feugiat odio, in facilisis neque consectetur a. Cras nisi nisi, accumsan quis ipsum ut, ultrices fermentum massa.', '', '2016-05-01 00:00:00', NULL, 'Tugas', 'D10K-4001', 4, NULL, NULL),
(3, 'A140810140021', 'Tugas 1 Jarkom', 'Nam feugiat massa ac magna auctor sollicitudin. Nullam rhoncus est non quam faucibus porttitor. Aenean vehicula laoreet pharetra. Fusce et nunc ac mi scelerisque posuere eget sit amet magna. Nunc pretium feugiat nisi eget venenatis. Sed nec sapien eu nisi mollis varius. Cras consequat, tellus eu hendrerit interdum, quam massa consequat enim, vel sagittis metus est vitae libero. Nulla elementum purus eget rutrum bibendum.\r\n\r\nNulla tellus libero, aliquet et placerat et, sollicitudin ut tellus. Maecenas vitae ipsum sed turpis vestibulum lacinia vel eget purus. Fusce metus ex, ornare vel metus sit amet, malesuada convallis ligula. Fusce sed dapibus lectus, quis volutpat velit. Maecenas diam nibh, tincidunt vitae commodo ac, luctus non nibh. Nulla dictum tempus mollis. Maecenas nec dignissim felis, vel sagittis sem. Aliquam neque ipsum, feugiat in diam ut, vulputate aliquet dui. Fusce faucibus lorem tellus, ornare cursus urna volutpat vitae. Morbi lacinia quis felis sit amet aliquet. Vivamus aliquam, erat et imperdiet sagittis, ipsum erat vehicula erat, vitae ullamcorper urna est eu odio.', '', '2016-05-25 00:00:00', '2016-05-31 00:00:00', 'Tugas', 'D10K-4003', 4, NULL, NULL),
(4, 'A140810140070', 'Tugas 1 Basis Data', 'In volutpat, leo eu porttitor finibus, ante ante sodales lacus, vulputate malesuada lectus nunc at diam. Ut sodales vulputate leo, sed accumsan ligula imperdiet eu. Donec eget suscipit nulla, nec vestibulum est. Ut sit amet ante eu velit porttitor euismod. Donec ut viverra ligula. Proin venenatis elit non aliquam varius. Curabitur aliquam magna in efficitur euismod. Suspendisse fermentum, enim id tempus mollis, purus leo hendrerit leo, nec rhoncus justo turpis ac mi. Duis interdum lacus ac enim varius elementum.\r\n\r\nMorbi luctus arcu id ipsum dapibus, venenatis consectetur neque pharetra. Sed feugiat metus eu dui rutrum, et elementum velit posuere. Praesent sodales neque id dui porttitor, eget elementum orci laoreet. Pellentesque cursus sodales urna. Donec libero nunc, semper ut tristique imperdiet, laoreet et felis. Sed id orci nulla. Vivamus ac orci augue. Curabitur est nisl, rutrum sed sem et, gravida molestie ex. Curabitur posuere odio vitae consequat congue. Etiam nulla lorem, vehicula sit amet ligula at, feugiat cursus quam.', '', '2016-05-25 00:00:00', '2016-05-31 00:00:00', 'Tugas', 'D10K-4002', 4, NULL, NULL),
(5, 'A140810140028', 'Laprak 1 AI', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere commodo dolor ac maximus. Nam id leo tristique, rhoncus metus quis, laoreet nulla. In hac habitasse platea dictumst. Vivamus sollicitudin ex eget dui rhoncus, et feugiat metus viverra. Integer condimentum euismod leo vitae sagittis. Fusce tempus sit amet ipsum ac semper. Nullam sollicitudin lorem leo, vitae ultrices metus porttitor quis. Praesent rutrum varius erat, in mattis ligula mollis ut. Sed nec enim sollicitudin, malesuada libero sit amet, luctus tellus. Etiam fermentum vehicula suscipit. Nullam non arcu non magna hendrerit luctus. Nam laoreet lectus a interdum condimentum.\r\n\r\nNam feugiat massa ac magna auctor sollicitudin. Nullam rhoncus est non quam faucibus porttitor. Aenean vehicula laoreet pharetra. Fusce et nunc ac mi scelerisque posuere eget sit amet magna. Nunc pretium feugiat nisi eget venenatis. Sed nec sapien eu nisi mollis varius. Cras consequat, tellus eu hendrerit interdum, quam massa consequat enim, vel sagittis metus est vitae libero. Nulla elementum purus eget rutrum bibendum.', '', '2016-05-25 00:00:00', '2016-05-31 00:00:00', 'Laprak', 'D10K-4001', 4, NULL, NULL),
(6, 'A140810140021', 'Laprak 1 Jarkom', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere commodo dolor ac maximus. Nam id leo tristique, rhoncus metus quis, laoreet nulla. In hac habitasse platea dictumst. Vivamus sollicitudin ex eget dui rhoncus, et feugiat metus viverra. Integer condimentum euismod leo vitae sagittis. Fusce tempus sit amet ipsum ac semper. Nullam sollicitudin lorem leo, vitae ultrices metus porttitor quis. Praesent rutrum varius erat, in mattis ligula mollis ut. Sed nec enim sollicitudin, malesuada libero sit amet, luctus tellus. Etiam fermentum vehicula suscipit. Nullam non arcu non magna hendrerit luctus. Nam laoreet lectus a interdum condimentum.\r\n\r\nNam feugiat massa ac magna auctor sollicitudin. Nullam rhoncus est non quam faucibus porttitor. Aenean vehicula laoreet pharetra. Fusce et nunc ac mi scelerisque posuere eget sit amet magna. Nunc pretium feugiat nisi eget venenatis. Sed nec sapien eu nisi mollis varius. Cras consequat, tellus eu hendrerit interdum, quam massa consequat enim, vel sagittis metus est vitae libero. Nulla elementum purus eget rutrum bibendum.', '', '2016-05-25 00:00:00', '2016-05-31 00:00:00', 'Laprak', 'D10K-4003', 4, NULL, NULL),
(7, 'A140810140070', 'Laprak 1 Basis Data', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere commodo dolor ac maximus. Nam id leo tristique, rhoncus metus quis, laoreet nulla. In hac habitasse platea dictumst. Vivamus sollicitudin ex eget dui rhoncus, et feugiat metus viverra. Integer condimentum euismod leo vitae sagittis. Fusce tempus sit amet ipsum ac semper. Nullam sollicitudin lorem leo, vitae ultrices metus porttitor quis. Praesent rutrum varius erat, in mattis ligula mollis ut. Sed nec enim sollicitudin, malesuada libero sit amet, luctus tellus. Etiam fermentum vehicula suscipit. Nullam non arcu non magna hendrerit luctus. Nam laoreet lectus a interdum condimentum.\r\n\r\nNam feugiat massa ac magna auctor sollicitudin. Nullam rhoncus est non quam faucibus porttitor. Aenean vehicula laoreet pharetra. Fusce et nunc ac mi scelerisque posuere eget sit amet magna. Nunc pretium feugiat nisi eget venenatis. Sed nec sapien eu nisi mollis varius. Cras consequat, tellus eu hendrerit interdum, quam massa consequat enim, vel sagittis metus est vitae libero. Nulla elementum purus eget rutrum bibendum.', '', '2016-05-25 00:00:00', '2016-05-31 00:00:00', 'Laprak', 'D10K-4002', 4, NULL, NULL),
(8, 'A140810140028', 'Tugas PTKI', 'Sed in sollicitudin lacus. Praesent id lorem massa. Curabitur nec urna iaculis, luctus lectus non, suscipit nulla. Nunc ut pulvinar lorem, sed suscipit nisi. Etiam sollicitudin nibh faucibus lorem placerat efficitur. Curabitur rhoncus neque lacinia porta posuere. Quisque mattis convallis sollicitudin. In commodo viverra ante, aliquam tincidunt ex. Vivamus rutrum neque nec metus auctor iaculis. Ut tristique feugiat odio, in facilisis neque consectetur a. Cras nisi nisi, accumsan quis ipsum ut, ultrices fermentum massa.', '', '2016-05-01 00:00:00', '2016-05-31 00:00:00', 'Tugas', 'D10K-1001', 1, NULL, NULL),
(26, 'A140810140001', 'Tugas Basis Data 9', 'Informasi tugas.', NULL, '2017-11-29 01:49:35', '0000-00-00 00:00:00', 'Tugas', 'D10K-4002', 4, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `_absen`
--
ALTER TABLE `_absen`
  ADD PRIMARY KEY (`npm`,`id_matkul`),
  ADD KEY `fk_absen_matkul` (`id_matkul`);

--
-- Indexes for table `_assistant`
--
ALTER TABLE `_assistant`
  ADD PRIMARY KEY (`id_assistant`);

--
-- Indexes for table `_mahasiswa`
--
ALTER TABLE `_mahasiswa`
  ADD PRIMARY KEY (`npm`);

--
-- Indexes for table `_matakuliah`
--
ALTER TABLE `_matakuliah`
  ADD PRIMARY KEY (`id_matkul`);

--
-- Indexes for table `_menempati`
--
ALTER TABLE `_menempati`
  ADD PRIMARY KEY (`id_ruangan`,`id_matkul`,`kelas`) USING BTREE,
  ADD KEY `fk_menempati_matkul` (`id_matkul`);

--
-- Indexes for table `_mengajar`
--
ALTER TABLE `_mengajar`
  ADD PRIMARY KEY (`id_assistant`,`id_matkul`),
  ADD KEY `fk_mengajar_matkul` (`id_matkul`),
  ADD KEY `fk_mengajar_semester` (`id_semester`);

--
-- Indexes for table `_mengambil`
--
ALTER TABLE `_mengambil`
  ADD PRIMARY KEY (`npm`,`id_matkul`,`id_semester`),
  ADD KEY `fk_mengambil_matkul` (`id_matkul`),
  ADD KEY `fk_mengambil_semester` (`id_semester`);

--
-- Indexes for table `_mengerjakan_tugas`
--
ALTER TABLE `_mengerjakan_tugas`
  ADD PRIMARY KEY (`npm`,`id_tugas`),
  ADD KEY `fk_mengerjakan_tugas_tugas` (`id_tugas`);

--
-- Indexes for table `_nilai`
--
ALTER TABLE `_nilai`
  ADD PRIMARY KEY (`npm`,`id_matkul`),
  ADD KEY `fk_nilai_matkul` (`id_matkul`);

--
-- Indexes for table `_ruangan`
--
ALTER TABLE `_ruangan`
  ADD PRIMARY KEY (`id_ruangan`);

--
-- Indexes for table `_semester`
--
ALTER TABLE `_semester`
  ADD PRIMARY KEY (`id_semester`);

--
-- Indexes for table `_tugas`
--
ALTER TABLE `_tugas`
  ADD PRIMARY KEY (`id_tugas`),
  ADD KEY `fk_tugas` (`id_assistant`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `_tugas`
--
ALTER TABLE `_tugas`
  MODIFY `id_tugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `_absen`
--
ALTER TABLE `_absen`
  ADD CONSTRAINT `fk_absen_matkul` FOREIGN KEY (`id_matkul`) REFERENCES `_matakuliah` (`id_matkul`),
  ADD CONSTRAINT `fk_absen_mhs` FOREIGN KEY (`npm`) REFERENCES `_mahasiswa` (`npm`);

--
-- Constraints for table `_menempati`
--
ALTER TABLE `_menempati`
  ADD CONSTRAINT `fk_menempati_matkul` FOREIGN KEY (`id_matkul`) REFERENCES `_matakuliah` (`id_matkul`),
  ADD CONSTRAINT `fk_menempati_ruangan` FOREIGN KEY (`id_ruangan`) REFERENCES `_ruangan` (`id_ruangan`);

--
-- Constraints for table `_mengajar`
--
ALTER TABLE `_mengajar`
  ADD CONSTRAINT `fk_mengajar_assitant` FOREIGN KEY (`id_assistant`) REFERENCES `_assistant` (`id_assistant`),
  ADD CONSTRAINT `fk_mengajar_matkul` FOREIGN KEY (`id_matkul`) REFERENCES `_matakuliah` (`id_matkul`),
  ADD CONSTRAINT `fk_mengajar_semester` FOREIGN KEY (`id_semester`) REFERENCES `_semester` (`id_semester`);

--
-- Constraints for table `_mengambil`
--
ALTER TABLE `_mengambil`
  ADD CONSTRAINT `fk_mengambil_matkul` FOREIGN KEY (`id_matkul`) REFERENCES `_matakuliah` (`id_matkul`),
  ADD CONSTRAINT `fk_mengambil_mhs` FOREIGN KEY (`npm`) REFERENCES `_mahasiswa` (`npm`),
  ADD CONSTRAINT `fk_mengambil_semester` FOREIGN KEY (`id_semester`) REFERENCES `_semester` (`id_semester`);

--
-- Constraints for table `_mengerjakan_tugas`
--
ALTER TABLE `_mengerjakan_tugas`
  ADD CONSTRAINT `fk_mengerjakan_tugas_mhs` FOREIGN KEY (`npm`) REFERENCES `_mahasiswa` (`npm`),
  ADD CONSTRAINT `fk_mengerjakan_tugas_tugas` FOREIGN KEY (`id_tugas`) REFERENCES `_tugas` (`id_tugas`);

--
-- Constraints for table `_nilai`
--
ALTER TABLE `_nilai`
  ADD CONSTRAINT `fk_nilai_matkul` FOREIGN KEY (`id_matkul`) REFERENCES `_matakuliah` (`id_matkul`),
  ADD CONSTRAINT `fk_nilai_mhs` FOREIGN KEY (`npm`) REFERENCES `_mahasiswa` (`npm`);

--
-- Constraints for table `_tugas`
--
ALTER TABLE `_tugas`
  ADD CONSTRAINT `fk_tugas` FOREIGN KEY (`id_assistant`) REFERENCES `_assistant` (`id_assistant`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
