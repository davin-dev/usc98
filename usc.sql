-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 10, 2020 at 01:58 PM
-- Server version: 5.6.34
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `usc`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `news_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `fullname`, `text`, `email`, `news_id`) VALUES
(6, 'ali reza', 'qqqqqqqqqq', 'sweetwow0098@gmail.com', 4),
(7, 'dwdwasd', 'wwwwwwwwwww', 'sweetwow0098@gmail.com', 4),
(8, 'ali reza', 'xsaxsa', 'sweetwow0098@gmail.com', 4);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fullname`, `email`, `text`) VALUES
(1, 'ali reza', 'sweetwow0098@gmail.com', 'campbell-boulanger-3ZUsNJhi_Ik-unsplash.jpg'),
(9, 'ali reza', 'sweetwow0098@gmail.com', ''),
(10, 'ali reza', 'sweetwow0098@gmail.com', ''),
(24, 'ali reza', 'sweetwow0098@gmail.com', 'fdvfdvfd'),
(35, '', '', ''),
(36, 'bfdbfdb', '', ''),
(37, '', '', ''),
(38, 'ali reza', 'sweetwow0098@gmail.com', 'grtgrtg'),
(39, 'ali reza', 'sweetwow0098@gmail.com', 'gtrvrtvrt'),
(40, '', '', ''),
(41, '', '', ''),
(42, 'ali reza', 'sweetwow0098@gmail.com', 'ecs'),
(43, 'ali reza', 'sweetwow0098@gmail.com', '44444444444'),
(44, 'ali reza', 'sweetwow0098@gmail.com', 'hygujbjbj');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `headline` varchar(150) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `news_cat` int(8) NOT NULL,
  `picture` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `view_count` int(11) NOT NULL DEFAULT '1',
  `likes` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `headline`, `content`, `excerpt`, `news_cat`, `picture`, `view_count`, `likes`, `date`) VALUES
(4, 'مایکروسافت اطلاعات جدیدی درباره برنامه‌های آتی وب‌اپلیکیشن‌های پیش‌رونده منتشر کرد', 'مایکروسافت سال گذشته اخبار بسیاری درباره‌ی توسعه‌ی جدی وب‌اپلیکیشن‌های پیش‌رونده (PWA) منتشر کرد. از آن زمان، باور عمومی این بود که برنامه‌ی ردموندی‌ها در این حوزه سرعت مناسبی ندارد. البته در هفته‌ی گذشته، تیم‌های متعددی از مایکروسافت انتشار اخبار و اطلاع‌رسانی درباره‌ی دسته‌ی PWA را شروع کرده‌اند.  وب‌اپلیکشن‌های پیش‌رونده (PWA) وب‌سایت‌ها یا اپلیکیشن‌های تحت‌وب هستند که عملکردی شبیه اپلیکیشن‌های اصلی گوشی هوشمند دارند و گوگل پیش‌گام بازار PWA شناخته می‌شود. در سال‌های گذشته، دیگر شرکت‌ها نیز به قطار وب‌اپلیکیشن‌های پیش‌رونده اضافه شده‌اند و توسعه‌ی آن‌ها عاملی مهم در دنیای امروز اپلیکیشن محسوب می‌شود. مایکروسافت نیز همیشه تلاش کرده پشتیبانی از PWA را در ویندوز ۱۰، به‌ویژه مرورگر اج، ارائه کند.', 'مایکروسافت تصمیم گرفته است وب‌اپلیکیشن‌های پیش‌رونده (PWA) را در استراتژی‌های اصلی توسعه‌ای خود اجرا کند؛ ازاین‌رو، توضیحات درباره‌ی برنامه‌های آتی داده است.', 1, '1.jpg', 129, 51, '2019-11-30'),
(5, 'گوشی هوشمند ۱۵۰ دلاری PinePhone با سیستم‌ عامل لینوکس رونمایی شد', 'درحال‌حاضر دو سیستم‌عامل اندروید و iOS سهم اصلی بازار گوشی‌های هوشمند را دراختیار دارند. وضعیت کنونی با وجود فراوانی و تنوع سخت‌افزار در بازار، انتخاب‌های مصرف‌کنندگان را در بخش سیستم‌عامل محدود می‌کند. مایکروسافت در گذشته تلاش کرد تا حدودی دوقطبی موجود را برهم بزند و هواوی نیز احتمالا به‌زودی رقیبی روانه‌ی بازار خواهد کرد. دراین‌میان، گزینه‌های دیگری هم هستند که با ادعای تمرکز بیشتر روی حریم خصوصی و پیکربندی وارد بازار می‌شوند. گوشی هوشمند پاین‌فون (PinePhone) از Pine64 یکی از انتخاب‌های جایگزین محسوب می‌شود. پاین‌فون هنوز برای عرضه‌ی انبوه به بازار آماده نیست؛ اما نگاهی اولیه به مشخصاتش، نشان‌ می‌دهد جایگزینی مناسب برای اندروید و iOS است. شرکت سازنده‌ی پاین‌فون Pine64 شرکتی کوچک با ساختاری اجتماعی محسوب می‌شود که تمرکز خود را به تولید محصولات مبتنی‌بر ARM معطوف کرده است. این شرکت فعالیت خود را با کامپیوترهای تک‌بورد مانند رزبری‌پای شروع و پس از مدتی، لپ‌تاپ‌های تک‌بورد خود را تولید کرد. حالا تصمیم گرفته است به‌طور جدی به بازار گوشی‌های هوشمند وارد شود. پاین‌فون اولین گوشی هوشمند Pine64 به‌شمار می‌آید که با قیمتی مقرون‌به‌صرفه روانه‌ی بازار خواهد شد. در آینده‌ی نزدیک، Pine64 احتمالا ساعت هوشمند و تبلت را هم تولید خواهد کرد.  پاین‌فون گوشی هوشمند کاملا متن‌بازی محسوب می‌شود که بلندپروازانه‌ترین پروژه‌ی Pine64 است. پاین‌فون برخلاف تمام گوشی‌های هوشمند موجود در بازار، براساس سیستم‌عامل اندروید یا iOS طراحی نشده و شرکت سازنده سیستم‌عامل لینوکس را برای این گوشی در نظر گرفته است. هنوز مشخصاتی از سیستم‌عامل نهایی نصب‌شده روی گوشی وجود ندارد؛ اما Pine64 ادعا می‌کند محصول ویژه‌ی مصرف‌کننده با تمامی پروژه‌های بزرگ موبایلی لینوکس هماهنگ خواهد بود. از مهم‌ترین پروژه‌های موبایلی می‌توان به Ubuntu Touch و Sailfish OS و Plasma Mobile اشاره کرد که هریک ضعف‌ها و قوت‌های خاص خود را دارند و همین تنوع یکی از مزیت‌های رقابتی پاین‌فون محسوب می‌شود.  کاربران پاین‌فون‌ می‌توانند بهترین سیستم‌عامل را بسته به نیاز خود انتخاب کنند. چنین رویکردی برخلاف رقبا محسوب می‌شود که سیستم‌عامل را از همان ابتدا و براساس تصمیم شرکت سازنده به‌نوعی به کاربر تحمیل می‌کنند. به‌بیان‌دیگر، کاربران با انتخاب سیستم‌های عامل‌ گوناگون، تجربه‌های متفاوتی باهم خواهند داشت. البته چنین قابلیتی کاربر را ملزم می‌کند نصب سیستم‌عامل را برعهده بگیرد؛ رویکردی که شاید برای کاربران نیمه‌حرفه‌ای، راحت و مناسب نباشد.', 'Pine64 می‌کوشد با گوشی‌های هوشمند و ارزان، سیستم‌عامل لینوکس را به رقیبی برای سیستم‌های عامل‌ رایج بازار همچون اندروید و iOS تبدیل کند.', 1, '2.jpg', 21, 2, '2019-11-29'),
(6, 'سامسونگ گلکسی A31 ،A11 و A41 با حافظه داخلی ۶۴ گیگابایتی عرضه می‌شوند', 'سری گلکسی A سامسونگ سال گذشته به موفقیت بزرگی دست یافت و حالا کره‌ای‌ها قصد دارند این موفقیت را در سال آینده با گوشی‌هایی مانند A11 و A31 و A41 ادامه دهند. این گوشی‌ها با شماره‌مدل‌های SM-A115X و SM-A315X و SM-A415X عرضه خواهند شد و خبر مهم این است که حافظه‌ی داخلی همه‌ی آن‌ها از ۶۴ گیگابایت آغاز می‌شود.  در نسخه‌های گذشته، حافظه‌ی ذخیره‌سازی هر دو گوشی گلکسی A10 و گلکسی A30 از ۳۲ گیگابایت شروع می‌شد؛ بنابراین، حافظه‌ی ۶۴ گیگابایتی می‌تواند خبر خوشحال‌کننده‌ای برای نسخه‌های جدید باشد. اخیرا مشخص شده است A51 و A71 به صفحه‌نمایش Infinity-O از نوع AMOLED و قاب دوربین مستطیل‌شکل در پشت مجهز هستند. البته هنوز مشخص نیست نمونه‌های اولیه‌ی فهرست گوشی‌های سری A نیز با این طراحی همراه هستند یا خیر.', 'گوشی‌های پایین‌رده‌ی سری A سامسونگ با افزایش دوبرابری در حافظه‌ی داخلی، با ۶۴ گیگابایت وارد بازار خواهند شد.', 1, '3.jpg', 7, 2, '2019-11-02'),
(7, 'با بهترین هدفون و ایربادهای تمام بی‌سیم آشنا شوید', 'باتوجه به افزایش تنوع ایرباد و هدفون‌های تمام‌بی‌سیم، در ادامه با مطالعه‌ی قابلیت‌ها و مقایسه‌ی بهترین نمونه‌های موجود قادر به انتخاب نمونه‌ی ایده‌آل باتوجه به کاربری خود خواهید بود.  ماه‌های گذشته شایعات بسیاری در مورد نسل جدید ایرپاد اپل وجود داشت و سخن از تغییر در طراحی و اضافه شدن تکنولوژی حذف صداهای اضافی در آن بود. هفته گذشته اپل بالاخره نسل جدید ایرپاد را با نام ایرپاد پرو (AirPods Pro) معرفی و اعلام کرد از تاریخ ۳۰ اکتبر در دسترس خریداران خواهد بود. اپل در این ایرباد بیسیم جدید خود طراحی را تغییر داده و سری‌های سیلیکونی و همچنین قابلیت تنظیم میزان ورود صدای محیط به گوش را به آن اضافه کرده است. اما باید دید رقبای بزرگ اپل ایرپاد که در مقابل آن ایستاده‌اند، چه ویژگی‌ها و امکاناتی را به خریداران ارائه می‌دهند. یکی از جدیدترین گزینه‌هایی که می‌توان دراین‌زمینه به آن توجه کرد گوگل پیکسل بادز جدید (New Pixel Buds) است که در رویداد ۱۵ اکتبر همراه‌با پیکسل ۴ گوگل معرفی شد و از بهار سال ۲۰۲۰ با قیمت ۱۷۹ دلار وارد بازار خواهد شد.  گوگل تنها شرکتی نیست که به مقابله با حکومت اپل بر بازار ایربادهای بیسیم برخواسته است. مایکروسافت نیز چندی پیش در جریان رویداد سرفیس از ایربادهای بیسیم خود با نام سرفیس ایربادز (Surface Earbuds) رونمایی کرد. سرفیس ایرباد جدید هدفون بی‌سیم واقعی است که به هر وسیله‌ی بلوتوثی متصل می‌شود، دو میکروفون داشته و عمر باتری آن ۲۴ ساعت (در مجموع با کیس) است. علاوه‌‌بر این سرفیس ایرباد توانایی درک انواع مختلف لمس را اعم از ضربه‌ی لمسی، لمس مدت‌دار و سوایپ، برایش معانی مختلفی دارد. به‌گفته‌ی مایکروسافت این ایرباد امسال با قیمت ۲۴۹ دلار وارد بازار خواهد‌ شد. پیش از آن هم سامسونگ گلکسی بادز (Samsung Galaxy Buds)، اکوبادز آمازون (Amazon Echo Buds)، سونی WF-1000XM3، سنهایزر مومنتوم، مستراند دینامیک MW07 Plus، جبرا الیت 75t و بیتز پاوربیتز پرو به بازار ایربادهای کاملا بی‌سیم معرفی شده‌ بودند.  ازآنجا که برخی از این محصولات هنوز در بازار وجود ندارند، نمی‌توان خیلی دقیق ویژگی‌های آن‌ها را با هم مقایسه کرد، اما مقایسه‌ی نقاط قوت معرفی شده برای هریک می‌تواند به انتخاب بهترین ایرباد کمک کند. در ادامه به مقایسه‌ی مطرح‌ترین ایربادها‌ی دنیای فناوری می‌پردازیم. ', 'باتوجه به افزایش تنوع ایرباد و هدفون‌های تمام‌بی‌سیم، در ادامه با مطالعه‌ی قابلیت‌ها و مقایسه‌ی بهترین نمونه‌های موجود قادر به انتخاب نمونه‌ی ایده‌آل باتوجه به کاربری خود خواهید بود.', 1, '4.jpg', 13, 1, '2019-11-09'),
(8, 'با سلام و عرض ادب', 'xsaxsaxasxsa', 'مایکروسافت تصمیم گرفته است وب‌اپلیکیشن‌های پیش‌رونده (PWA) را در استراتژی‌های اصلی توسعه‌ای خود اجرا کند؛ ازاین‌رو، توضیحات درباره‌ی برنامه‌های آتی داده است.', 2, '12.jpg', 11, 2, '2019-12-06'),
(9, 'با سلام و عرض ادب', 'there is no internet to use for now', 'اولین خبر را وارد میکنیم', 6, '', 2, 0, '2019-12-31'),
(10, 'no internet', 'xsaxsaxasxsa', 'fvvwdvwd', 6, 'Annotation 2019-12-22 190647.png', 33, 2, '2019-12-09');

-- --------------------------------------------------------

--
-- Table structure for table `news_cat`
--

CREATE TABLE `news_cat` (
  `id` int(20) NOT NULL,
  `title` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `news_cat`
--

INSERT INTO `news_cat` (`id`, `title`) VALUES
(1, 'تکنولوژی'),
(2, 'فرهنگی'),
(6, 'علمی');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(40) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password` varchar(40) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `access_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `access_level`) VALUES
('admin', '123456', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_cat`
--
ALTER TABLE `news_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `news_cat`
--
ALTER TABLE `news_cat`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
