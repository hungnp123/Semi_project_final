-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 06, 2022 lúc 12:56 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `semi_project`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `author`
--

CREATE TABLE `author` (
  `author_id` int(11) NOT NULL,
  `author_name` varchar(100) NOT NULL,
  `author_origin` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `author`
--

INSERT INTO `author` (`author_id`, `author_name`, `author_origin`, `description`) VALUES
(1, 'Paulo Coelho', 'Brazil', 'Paulo Coelho is a famous Brazilian novelist.'),
(2, 'Oscar Wilde', 'Ireland', 'Oscar Wilde, full name Oscar Fingal O\'Flahertie Wills Wilde, is a famous Irish writer. He was born on October 16, 1854, in Dublin, Ireland, and died in Paris of encephalitis on November 30, 1900.'),
(3, 'Neil Gaiman', 'England', 'Neil Richard MacKinnon Gaiman is an English novelist, short story writer, comic book writer, and screenwriter.'),
(4, 'F. Scott Fitzgerald', 'America', 'Francis Scott Key Fitzgerald is an American writer, best known for his works on the \"Jazz age\". He was born into a family of Irish Catholic descent.'),
(5, 'Nam Cao', 'Vietnam', 'Nam Cao is a writer and also a Vietnamese soldier and martyr. He is a great realist writer, a resistance journalist, and one of the most representative writers of the 20th century.'),
(6, 'Paul Kalanithi', 'American', 'Paul Sudhir Arul Kalanithi is an Indian-American neurosurgeon and writer. His book When Breath Becomes Air is a memoir about his life and battle with stage IV metastatic lung cancer.'),
(7, 'Thomas Harris', 'American', 'William Thomas Harris III was an American writer, best known for a series of suspense novels about his most famous character, Hannibal Lecter.'),
(8, 'Louisa May Alcott', 'American', 'Louisa May Alcott is an American author known for many children\'s books, typically the classic Little Women.'),
(9, 'André Aciman', 'Egpyt', 'André Aciman is an American writer. Born and raised in Alexandria, Egypt, he is currently a distinguished professor at the City University of New York\'s Central College, where he teaches the history of literary theories and the works of Marcel Proust.'),
(10, 'Antoine de Saint-Exupéry', 'France', 'Antoine Marie Jean-Baptiste Roger de Saint-Exupéry, commonly known as Antoine de Saint-Exupéry or simply Saint-Ex for short, was a famous French writer and aviator. Saint-Exupéry is best known for his literary masterpiece The Little Prince.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `cate_id` int(11) NOT NULL,
  `cate_name` varchar(100) NOT NULL,
  `cate_des` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`cate_id`, `cate_name`, `cate_des`) VALUES
(1, 'Action and Adventure', 'Action and adventure books constantly have you on the edge of your seat with excitement, as your fave main character repeatedly finds themselves in high-stakes situations.'),
(2, 'Literary', 'Though it can be seen as a broad genre that encompasses many others, literary fiction refers to the perceived artistic writing style of the author. Their prose is meant to evoke deep thought through stories that offer personal or social commentary on a particular theme.'),
(3, 'Romance', 'Oh romance, how could we ever resist you? The genre that makes your heart all warm and fuzzy focuses on the love story of the main protagonists. This world of fiction is extremely wide-reaching in and of itself, as it has a variety of sub-genres including: contemporary romance, historical, paranormal, and the steamier erotica.'),
(4, 'Self-help', 'Self-help books or self-help books are books written with the purpose of teaching readers how to solve and deal with their own problems.'),
(5, 'Detective and Mystery', 'The plot always revolves around a crime of sorts that must be solved—or foiled—by the protagonists.'),
(6, 'Comic Book or Graphic Novel', 'The stories in comic books and graphic novels are presented to the reader through engaging, sequential narrative art (illustrations and typography) that\'s either presented in a specific design or the traditional panel layout you find in comics. With both, you\'ll often find the dialogue presented in the tell-tale \"word balloons\" next to the respective characters.'),
(7, 'Fantasy', 'While usually set in a fictional imagined world—in opposition, Ta-Nehisi\'s Coates\'s The Water Dancer takes place in the very real world of American slavery—fantasy books include prominent elements of magic, mythology, or the supernatural.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_img` varchar(100) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_year` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `product_author` int(11) NOT NULL,
  `product_cate` int(11) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_img`, `product_price`, `product_year`, `description`, `product_author`, `product_cate`) VALUES
(1, 'The Alchemist', 'book1.jpg', '34$', '1988', 'The Alchemist is a novel that was first published in Brazil in 1988 and is the most famous book by writer Paulo Coelho. The work has been translated into 67 languages and sold up to 95 million copies, becoming one of the best-selling books of all time.', 1, 7),
(2, 'The Picture of Dorian Gray', 'book2.jpg', '4$', '1890', 'The Portrait of Dorian Gray is the only novel by Irish writer Oscar Wilde and has been in print since 1891. Before that, the novel was serialized in Lippincott\'s monthly magazine.', 2, 2),
(3, 'The Great Gatsby', 'book3.jpg', '10$', '1925', 'The Great Gatsby is a novel by American writer F. Scott Fitzgerald, first published on April 10, 1925.', 4, 2),
(4, 'The Curious Case of Benjamin Button', 'book4.jpg', '15$', '1922', '\"The Curious Case of Benjamin Button\" is a short story written by F. Scott Fitzgerald. It was first published in Collier Magazine on May 27, 1922, with cover and illustrations by James Montgomery Flagg.', 4, 3),
(5, 'Chi Pheo', 'book5.jpg', '3$', '1941', 'Chi Pheo is a famous short story written by writer Nam Cao in February 1941. Chi Pheo is an excellent work, showing Nam Cao\'s unique story-writing art, and at the same time a tragedy of a young man. poor farmers are alienated from society.', 5, 2),
(6, 'Stardust', 'book6.jpg', '12$', '1997', 'Stardust is a 1999 fantasy novel by British writer Neil Gaiman, usually published with illustrations by Charles Vess.', 3, 1),
(7, 'Coraline', 'book7.jpg', '9$', '2002', 'Coraline is a dark fantasy children\'s novel by British author Neil Gaiman, published in 2002 by Bloomsbury and Harper Collins.', 3, 6),
(8, 'The Sandman', 'book8.jpg', '27$', '1996', 'There is a dark king who rules our dreams from a place of shadows and fantastic things. He is Morpheus, the lord of the story. Older than humankind itself, he inhabits -- along with Destiny, Death, Destruction, Desire, Despair, and Delirium, his Endless sisters and brothers -- the realm of human consciousness. His powers are myth and nightmare -- inspirations, pleasures, and punishments manifested beneath the blanketing mist of sleep.\r\n\r\nSurrender to him now.', 3, 6),
(9, 'When Breath Becomes Air', 'book9.jpg', '16$', '2016', 'When Breath Becomes Air is the autobiography of Dr. Paul Kalanithi about his life and battle against lung cancer. The book was released by Random House on January 12, 2016, 1 year after Paul\'s death.', 6, 4),
(10, 'The Silence of the Lambs', 'book10.jpg', '15$', '1988', 'The Silence of the Lambs is a detective thriller novel written by author Thomas Harris. First published in 1988.', 7, 5),
(11, 'Hannibal', 'book11.jpg', '18$', '1999', 'Seven years have passed since Dr. Hannibal Lecter escaped from custody, seven years since FBI Agent Clarice Starling interviewed him in a maximum security hospital for lunatics.', 7, 5),
(12, 'Little Women', 'book12.jpg', '18$', '1868', 'Little Women is a novel by American author Louisa May Alcott that was originally published in two volumes in 1868 and 1869. Alcott wrote the book over several months at the request of the publisher.', 8, 2),
(13, 'Call Me By Your Name', 'book13.jpg', '19$', '2007', 'Call Me By Your Name is a 2007 novel by American writer André Aciman. The book tells the romance between a 17-year-old Jewish teenager of Italian descent, Elio Perlman, and 24-year-old American Jewish scholar Oliver.', 9, 3),
(14, 'Le Petit Prince', 'book14.jpg', '14$', '1943', 'The Little Prince, published in 1943, is the most famous novel by French writer and aviator Antoine de Saint-Exupéry. He rented The Bevin House in Asharoken, Long Island, New York while writing this piece. The novel also includes many paintings painted by Saint-Exupéry himself', 10, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `role`
--

INSERT INTO `role` (`role_id`, `role_name`) VALUES
(1, 'admin'),
(2, 'customer');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `password` varchar(11) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`author_id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cate_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_cate` (`product_cate`),
  ADD KEY `product_author` (`product_author`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `role` (`role`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `author`
--
ALTER TABLE `author`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`product_cate`) REFERENCES `category` (`cate_id`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`product_author`) REFERENCES `author` (`author_id`);

--
-- Các ràng buộc cho bảng `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role`) REFERENCES `role` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
