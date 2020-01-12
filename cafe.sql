-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15-01-30 10:13
-- 서버 버전: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cafe`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `board`
--

CREATE TABLE IF NOT EXISTS `board` (
  `idx` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `od` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `hit` int(11) NOT NULL,
  `day` date NOT NULL,
  `dap` int(11) NOT NULL,
  `text` text NOT NULL,
  `midx` int(11) NOT NULL,
  PRIMARY KEY (`idx`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- 테이블의 덤프 데이터 `board`
--

INSERT INTO `board` (`idx`, `title`, `od`, `name`, `hit`, `day`, `dap`, `text`, `midx`) VALUES
(7, '첫번째글`', 3, '0', 77, '2015-01-27', 0, '안녕하세요~', 0),
(8, '답글 1이요', 1, '0', 0, '2015-01-27', 1, '답글1', 7),
(9, 'ㄹㅇㄴㄹ', 2, '0', 1, '2015-01-27', 1, 'ㄹㅇㄴㅁㄹㅇㄴㅁㅇㄹㄴㅁㅇㄹㄴㄹㅇㄴㅁㄴㅇㄹ', 7),
(10, '2131fesqf', 4, 'admin11', 0, '2015-01-29', 0, 'sads341', 0),
(11, 'fsdfds', 5, 'admin11', 0, '2015-01-29', 0, 'fdsdsfdfs', 0),
(12, '312f2', 6, 'admin11', 0, '2015-01-29', 0, 'f213', 0),
(13, '4231', 7, 'admin11', 0, '2015-01-29', 0, '1432r23ewefssfdaㅇㅀㅎㅎㅇ', 0),
(14, '12ㄹ2ㄹㄴㄹ', 8, 'admin11', 0, '2015-01-29', 0, 'ㄹㄴㅁㄷㄱㅂㅈ', 0),
(15, 'fdㄹㅇㄴ', 9, 'admin11', 0, '2015-01-29', 0, 'ㅇㄹㄴㅇㄹㄴㅇㄴㄹ', 0),
(16, 'ㄹㅇㄹㅇㄴ', 10, 'admin11', 0, '2015-01-29', 0, 'ㄹㅇㄴㅁㅇㄴㄻㅇㄹㄴㅇㄹㄴㅁ', 0),
(17, 'ㅇㅁㄴㅍㄹ', 11, 'admin11', 0, '2015-01-29', 0, 'ㅇㄴㅁㄹㅇㄴㄹㅇㄴ', 0),
(18, 'ㄹㅇㄴㅁㄹㅇ', 12, 'admin11', 0, '2015-01-29', 0, 'ㄴㄹㅇㄴㄹㅇㄴㅇㄹㄴㅁㅇㄴ', 0),
(19, 'ㅍㄴㅇㄻㅁㄴ', 13, 'admin11', 0, '2015-01-29', 0, 'ㄹ32421ㄹㄴㄷ', 0),
(20, 'ㄹㅇ123', 14, 'admin11', 0, '2015-01-29', 0, 'ㅇㄹㄴㄹ23', 0),
(21, 'ㄹㅇㄴㅁㄴㄹ', 15, 'admin11', 1, '2015-01-29', 0, 'dㄹㅇㄴㄹㅇㄴㅁㅇㄴㄹㄹㅇㄴㄹㅇㄴㅁ', 0);

-- --------------------------------------------------------

--
-- 테이블 구조 `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `idx` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `e_name` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `mid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `porder` varchar(100) NOT NULL,
  PRIMARY KEY (`idx`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- 테이블의 덤프 데이터 `menu`
--

INSERT INTO `menu` (`idx`, `title`, `e_name`, `text`, `mid`, `sid`, `porder`) VALUES
(1, '카페소개', 'intro', '', 1, 0, 'intro'),
(2, '아카데미', 'hand', '', 2, 0, 'academe'),
(3, '쇼핑', 'shopping', '', 3, 0, 'shopping'),
(4, '회원활동', 'besket', '', 4, 0, 'user'),
(5, '자유게시판', 'board', '', 5, 0, 'board'),
(6, '통합검색', 'search', '', 6, 0, 'search'),
(7, '인사말', 'intro', '\r\n전문성, 차별화, 경쟁력을 갖춘 Global Coffee Group으로의 성장\r\nSpecialization, differentiation, competitive growth of the global coffee group\r\n\r\n\r\n- 생산국가와의 소통을 통한 경쟁력 확보\r\n- 머신의 다각화를 통한 차별화 정책 실현\r\n- 고객 우선주의의 고객만족 실현\r\n\r\n\r\n저희 ZeroCafe는 2014년 커피생두 무역을 시작으로 전세계 20개 이상의 그룹거점을 갖고 있는 \r\n세계적인 커피 공급사인 스위스 "ECOM GROUP"의 대한민국 독점 에이전시입니다.\r\n또한 세계적인 브라질 스페셜티 공급사이며 현재 120여개의 스페셜티 농장을 보유하고 있는 "CARMO COFFEES"와 \r\n브라질 스페셜티 전문 공급사인 "BourBon Sepcialty Coffees"의 대한민국 독점 에이전시 계약을 체결하여\r\n국내시장의 스페셜티 보급에 앞장서고 있습니다.\r\n당사는 전세계 현지 거점을 통한 빠르고 정확한 시장정보를 공유하고 있으며, 매년 산지에 지사방문을 통하여 \r\n시장조사, 생산현황, 다양한 산지 샘플 등의 공급량 체크를 통해 원활한 국내 커피시장의 공급에 앞장서고 있습니다.\r\n또한 전문가들로 구성된 Q.C(Quality Control) 팀에 의해 체계적인 품질 및 CUP 테스트로 생두상태 및 결점, 맛, 향미 등의 \r\n엄격한 기준의 평가를 실시하여 최상위 품질의 커피를 공급하고 있습니다.\r\n당사의 모든 임직원 일동은 고객분들에게 보다 프로페셔널한 서비스와 고품질의 상품을 제공하기 위해 끊임없이 노력하며, \r\n언제나 최선을 다하는 마음으로 상품 하나하나를 정성스럽게 공급할 것을 약속 드립니다.\r\n\r\n감사합니다.', 1, 1, 'intro'),
(8, '이용안내', 'use', '[당일출고 안내]\r\n오후 12시 이전 입금 확인 주문 건에 한하여 당일 출고 가능합니다.\r\n(토, 일, 공휴일 제외)\r\n\r\n[구매문의 및 상담 이용시간]\r\n평일 09:00~13:00, 14:00~19:00\r\n(토, 일, 공휴일 휴무)\r\n문의전화: 02-123-4567\r\n\r\nZeroCafe에 지속적인 관심을 가져주시는 고객님들께 깊은 감사의 말씀을 드리면서 \r\n보다 좋은 품질의 제품들을 선보일 것을 약속드립니다.\r\n감사합니다.\r\n', 1, 2, 'intro'),
(9, '핸드 드립', 'hand', '핸드 드립(HAND DRIP)\r\n\r\n* 준비물 : 드리퍼, 여과지, 주전자, 커피\r\n\r\n* STEPS\r\n1. 여과지 접기 \r\n   여과지 옆쪽의 접지 부분을 접은 다음 아래쪽 접지 부분을 옆면 접지를 접은 반향과 반대로 접습니다. \r\n   드리퍼에 잘 밀착되도록 끼웁니다. \r\n  \r\n2. 잔데우기 \r\n   잔에 뜨거운 물을 부어 미리 데웁니다. 서버를 사용할 경우 서버와 잔 모두를 충분히 데우는 게 좋습니다. \r\n  \r\n3. 원두 갈아서 담기 \r\n   원두를 갈아서 드리퍼에 담고 평평하게 합니다. 보통 1잔에 1스푼(10g)을 사용하며, \r\n   진한 커피를 좋아하는 경우에는 1.5~2스푼을 사용합니다. \r\n  \r\n4. 뜸 들이기 \r\n   팔팔 끓기 직전의 물을 붓습니다. 커피에 최대한 가까이 대고, 가운데에서부터 나선형(모기향 모양)으로 \r\n   돌려가면서 붓습니다. 처음에는 원두를 적실만큼 소량의 물을 붓고 20초 정도 두면 뜸이 들면서 훨씬 \r\n   좋은 맛을 뽑아낼 수 있습니다. 뜸을 들일 때 커피 위로 굵은 거품이 올라와 둥근 산이 되는데, \r\n   이는 커피 안에 든 가스 성분이 빠지는 것으로 신선한 커피라야 거품이 생깁니다. \r\n   [TIP] 보통 85~86℃의 물을 사용합니다. 약배전 커피라면 89~91℃가 알맞으며, 강배전이라면 85℃ 아래로 합니다. \r\n  \r\n5. 나선형으로 물 붓기 \r\n   뜸을 들이고 난 뒤 다시 중심에서 나선형으로 물을 부어가는 것을 반복합니다. \r\n   드리퍼에 든 커피가 움푹 꺼지지 않게 물을 가는 줄기로 계속 부어줍니다. \r\n   이때 여과지에 물이 직접 닿으면 드리퍼 벽을 타고 물이 바로 내려가 커피에서 물맛이 나므로 주의가 필요합니다. \r\n   원하는 양을 내린 뒤 드리퍼에 물이 찰랑찰랑한 상태에서 커피 추출을 멈춥니다. \r\n   물이 다 빠질 때까지 그냥 두면 쓰고 텁텁한 잡맛이 함께 들어갑니다. \r\n  \r\n6. 거품 걷어내기 \r\n   커피에 생긴 거품은 잡맛을 낼 수 있으므로 걷어냅니다. 서버에 여러 잔 분량을 내렸다면 여러 번 흔들어 \r\n   고루 섞은 다음 잔에 담습니다. \r\n\r\n\r\n[참고] 한 번 내린 커피와 여과지는 쓴맛과 종이 맛이 두드러지기 때문에 재활용이 불가능합니다. \r\n\r\n', 2, 1, 'academe'),
(10, '프렌치 프레스', 'french', '프렌치 프레스(FRENCH PRESS)\r\n\r\n* 준비물 : 프렌치 프레스, 커피, 긴 스푼, 시계\r\n\r\n* STEPS\r\n1. 원두 갈기 & 담기 \r\n   입자를 굵게 갑니다(핸드드립, 커피메이커용보다 훨씬 굵게). 입자가 고울 경우 필터에 걸러지지 않고 \r\n   통과하여 커피에 침전물이 많아지거나 필터 구멍이 막힐 수 있습니다. \r\n   물 120ml(일반적인 커피 한 잔)에 커피 10g(1스푼)이 기본이며, 입맛에 따라 커피 양을 가감하면 됩니다. \r\n   프렌치 프레스가 깨끗하게 건조되어 있는 것을 확인하고 분쇄한 커피를 넣으세요. \r\n  \r\n2. 물 붓기 \r\n   물이 막 끓기 시작하면 45초 정도 식혀서 붓습니다. \r\n   이 때 센 물줄기로 붓는데 커피 가루가 ''모두'' 젖을 수 있게 돌려가며 붓는 게 포인트입니다. \r\n   프레스에 물을 꽉 채우지 마세요. 커피에 들어있던 이산화탄소가 물을 만나 빠져나오면서 거품층을 만드는 데 \r\n   어느 정도 부풀 수 있는 공간이 필요합니다. \r\n  \r\n3. 시간 재기 & 휘젓기 \r\n   타이머가 있다면 4분을 설정해두세요. 커피가 가진 맛 성분들을 끌어내는 데 4분여의 시간이 필요하며, \r\n   그 이상 길어지면 텁텁해집니다. 1분이 지나면 긴 스푼으로 거품을 깨트리면서 물과 커피가 고루 섞이도록 휘저어주세요.\r\n\r\n4. 프레스 누르기 \r\n   여과망이 달린 뚜껑(플런저)과 프레스의 주둥이 부분을 잘 맞춘 다음, 플런저를 지그시 누릅니다. \r\n   한꺼번에 확 누르지 말고, 플런저를 조금씩 눌렀다 풀었다 반복해가면서 커피가루를 맨 밑바닥으로 모아갑니다. \r\n  \r\n5. 커피 담기 \r\n   걸러낸 커피의 80%만 컵에 따라냅니다(나머지 20%는 텁텁하고 쓰기 때문). \r\n   또한 프레스에 커피를 그대로 두어도 쓴맛이 많아지기 때문에 따르고 남은 음료는 보온이 잘 되는 \r\n   찻주전자나 텀블러 등에 담아둡니다. \r\n', 2, 2, 'academe'),
(11, '모카 포트', 'mocha', '모카 포트(MOCHA POT)\r\n\r\n* 준비물 : 모카 포트, 커피, 숟가락\r\n\r\n* STEPS\r\n1. 물을 끓여서 붓기 \r\n   다른 주전자에 물을 미리 끓입니다. 모카포트에 찬물을 부어 끓이면 커피를 추출(Brew)하는 게 아니라 \r\n   익히기(Cook) 때문에 쓴맛이 도드라지고 거칠 뿐만 아니라 불쾌한 금속 냄새가 납니다. \r\n   끓인 물을 모카포트 아래부분인 물통에 붓습니다. 물통 윗부분을 보면 스팀압력 밸브 역할을 하는 \r\n   작은 구멍이 있는데, 그 아래까지 물을 채우면 됩니다. \r\n  \r\n2. 커피 담아서 꾹꾹 다지기 \r\n   커피는 에스프레소용으로, 또는 그보다 살짝 굵게 갑니다(보다 진한 맛을 원할 경우 더 곱게 갈아도 좋습니다). \r\n   깔대기 모양의 필터 바스켓 안에 커피를 가득 담고 숟가락 뒷면으로 꾹꾹 눌러 다집니다. \r\n   순간적으로 수증기압을 받아 올라오는 물이 커피가루를 고루 적셔 천천히 통과할 수 있도록 \r\n   잘 다져주는 게 중요합니다. 바스켓 가장자리와 물통 외부에 묻은 커피가루를 모두 닦아줍니다. \r\n  \r\n3. 가스레인지에서 모카 포트 끓이기 \r\n   물통에 바스켓과 포트를 장착하고 잘 여밉니다. 가스레인지의 가장 작은 버너 위에 포트를 놓고 끓입니다. \r\n   불꽃이 모카 포트의 바닥면을 넘지 않게, 손잡이가 뜨거워지지 않게 주의해야 합니다. \r\n   이 단계에서는 뚜껑을 열어둬도 됩니다. \r\n   [TIP] 가스레인지 대신 핫플레이트를 사용해도 됩니다. \r\n  \r\n4. 커피가 올라오는 과정 지켜보기 \r\n   본격적으로 추출이 시작되고 커피 줄기가 안정적이 되면 뚜껑을 닫고 불에서 내립니다. \r\n   커피가 더 이상 올라오지 않으면 컵에 따릅니다. \r\n   [TIP] 모카포트를 불에서 내린 다음 차가운 타월로 아래 물통을 감싸주는 방법도 있습니다. \r\n         추출이 빨리 끝나 양은 좀 적지만 바디감과 단맛은 보다 살아나고 뒤에 올라올 수 있는 \r\n         금속 맛을 줄여준다고도 합니다. \r\n', 2, 3, 'academe'),
(12, '장바구니', 'besket', '', 4, 1, 'user'),
(13, '주문정보', 'information', '', 4, 2, 'user');

-- --------------------------------------------------------

--
-- 테이블 구조 `reserve`
--

CREATE TABLE IF NOT EXISTS `reserve` (
  `idx` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `goods` varchar(100) NOT NULL,
  `kg` varchar(111) NOT NULL,
  `amount` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`idx`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- 테이블의 덤프 데이터 `reserve`
--

INSERT INTO `reserve` (`idx`, `name`, `goods`, `kg`, `amount`, `type`, `date`) VALUES
(9, 'admin11', 'Brazil Carmo Coffees', '10kg', 8, 'save', '2015-01-29'),
(10, 'admin11', 'Colombia San Agustin', '1kg', 1, 'save', '2015-01-29'),
(11, 'admin11', 'Fazenda Do Moinho', '1kg', 1, 'save', '2015-01-29'),
(12, 'admin11', 'Guatemala El Naranjo Kikiya', '1kg', 1, 'save', '2015-01-29'),
(13, 'admin11', 'Colombia San Agustin', '1kg', 1, 'save', '2015-01-29'),
(14, 'admin11', 'Fazenda Do Moinho', '1kg', 1, 'save', '2015-01-29'),
(15, 'admin11', 'Brazil Carmo Coffees', '1kg', 7, 'save', '2015-01-29'),
(16, 'admin11', 'Colombia San Agustin', '1kg', 1, 'save', '2015-01-29'),
(17, 'admin11', 'Fazenda Do Moinho', '1kg', 1, 'save', '2015-01-29'),
(18, 'admin11', 'Colombia San Agustin', '1kg', 1, 'save', '2015-01-29'),
(19, 'admin11', 'Fazenda Do Moinho', '1kg', 1, 'save', '2015-01-29'),
(20, 'admin11', 'Colombia San Agustin', '1kg', 6, 'save', '2015-01-29'),
(21, 'admin11', 'Fazenda Do Moinho', '1kg', 6, 'save', '2015-01-29'),
(22, 'admin11', 'Guatemala El Naranjo Kikiya', '1kg', 8, 'save', '2015-01-29'),
(23, 'jls8357', 'Brazil Carmo Coffees', '1kg', 1, 'save', '2015-01-30'),
(24, 'jls8357', 'Costarica Terra Bella', '1kg', 1, 'save', '2015-01-30'),
(25, 'jls8357', 'Fazenda Do Moinho', '1kg', 1, 'save', '2015-01-30'),
(26, 'jls8357', 'Guatemala El Naranjo Kikiya', '1kg', 1, 'save', '2015-01-30');

-- --------------------------------------------------------

--
-- 테이블 구조 `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `idx` int(11) NOT NULL AUTO_INCREMENT,
  `text` text NOT NULL,
  `name` varchar(100) NOT NULL,
  `midx` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`idx`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- 테이블의 덤프 데이터 `review`
--

INSERT INTO `review` (`idx`, `text`, `name`, `midx`, `date`) VALUES
(17, 'fsdfdsa', 'admin11', 7, '2015-01-28'),
(18, 'fdsfds', 'admin11', 7, '2015-01-28'),
(19, 'dsfadsd', 'admin11', 7, '2015-01-28'),
(20, 'dsfadsd', 'admin11', 7, '2015-01-28'),
(21, 'fdsafsadfsad', 'admin11', 7, '2015-01-28'),
(22, '11111111111111111111111111111111111111111111111111111111111111111111111111111', 'admin11', 7, '2015-01-28'),
(23, 'dfds\nfds\ndfs\ndsf\ndsf\ndsf\ndsf\ndfs\nfds\ndsf\n', 'admin11', 7, '2015-01-28'),
(24, 'fdsafdsafsdfdasfs', 'admin11', 7, '2015-01-28'),
(25, '321321312', 'admin11', 7, '2015-01-28'),
(26, '11111', 'admin11', 7, '2015-01-28'),
(27, '321321213231213321', 'admin11', 7, '2015-01-28');

-- --------------------------------------------------------

--
-- 테이블 구조 `shopping`
--

CREATE TABLE IF NOT EXISTS `shopping` (
  `idx` int(11) NOT NULL AUTO_INCREMENT,
  `goods` varchar(100) NOT NULL,
  `1kg` int(11) NOT NULL,
  `10kg` int(11) NOT NULL,
  `20kg` int(11) NOT NULL,
  PRIMARY KEY (`idx`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- 테이블의 덤프 데이터 `shopping`
--

INSERT INTO `shopping` (`idx`, `goods`, `1kg`, `10kg`, `20kg`) VALUES
(1, 'Brazil Carmo Coffees', 8500, 75000, 140000),
(2, 'Colombia San Agustin', 10500, 95000, 180000),
(3, 'Fazenda Do Moinho', 25000, 219999, 440000),
(4, 'Guatemala El Naranjo Kikiya', 13800, 96000, 184500),
(5, 'Honduras Vista Hermosa', 13000, 120000, 230000),
(6, 'Costarica Terra Bella', 18500, 175000, 230000),
(7, 'Nicaraqua El Suyatal', 18500, 175000, 340000),
(8, 'Dominica Finca Jimenez', 12400, 114000, 212000),
(9, 'Mexico Coatepec Veracruz', 6900, 69000, 138000),
(10, 'Ethiopia Yirgacheffe Kochere', 14000, 130000, 250000),
(11, 'Yemen Mocha Harazi', 28000, 270000, 530000),
(12, 'Rwanda Kirezi', 15500, 125000, 250000),
(13, 'Indonesia Mandheling', 11500, 100500, 200000);

-- --------------------------------------------------------

--
-- 테이블 구조 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` varchar(111) NOT NULL,
  `pw` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `post_num` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `hit` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `user`
--

INSERT INTO `user` (`id`, `pw`, `name`, `address`, `post_num`, `phone`, `mail`, `hit`) VALUES
('321213321', '2311233122', '321321321', '씨발', '10231 - 031', '4321 - 4121', 'fsfs@naver.com', 0),
('admin11', '1234', '관리자', 'fmksdf', '12312 - 23121', '1322 - 3132', '', 0),
('fdsdfsdsf', 'fddfsjdsfj', 'dsdsfdfs', '43234432', '4523432 - 4323', '4332 - 3242', 'jjdsffdsfj', 0),
('jls8357', 'wlsdk1049', '박진아', 'dfdfdfdsf', '602 - 214', '2940 - 8357', 'jades777@naver.com', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
