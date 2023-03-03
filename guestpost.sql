-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2023 at 07:55 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `guestpost`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` tinytext NOT NULL,
  `slug` tinytext NOT NULL,
  `cat_image` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `cat_image`, `created_at`, `updated_at`) VALUES
(1, 'Automobiles', 'automobiles', NULL, '2023-02-02 14:58:27', '2023-02-02 14:58:27'),
(2, 'Business', 'business', NULL, '2023-02-02 14:58:50', '2023-02-02 14:58:50'),
(3, 'Events', 'events', NULL, '2023-02-02 14:59:10', '2023-02-02 14:59:10');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_10_12_093941_category', 1),
(6, '2022_10_13_104909_create_posts', 1),
(7, '2022_10_13_125738_create_question', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cate_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `slug` tinytext NOT NULL,
  `meta_title` tinytext DEFAULT NULL,
  `meta_desc` tinytext DEFAULT NULL,
  `image_alt` varchar(400) DEFAULT NULL,
  `short_desc` varchar(400) DEFAULT NULL,
  `long_desc` longtext DEFAULT NULL,
  `post_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `cate_id`, `user_id`, `name`, `slug`, `meta_title`, `meta_desc`, `image_alt`, `short_desc`, `long_desc`, `post_image`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '7 Steps to a Successful SEO Content Strategy', '7-steps-to-a-successful-seo-content-strategy', '7 Steps to a Successful SEO Content Strategy', '7 Steps to a Successful SEO Content Strategy', NULL, 'SEO basically stands for Search Engine Optimization. The abbreviation gives it all. It is a process where organizations undergo to make sure that their site ranks high in the search engines for relevant keywords and phrases.', '<p>SEO basically stands for&nbsp;<strong>Search Engine Optimization</strong>. The abbreviation gives it all. It is a process where organizations undergo to make sure that their site ranks high in the search engines for relevant keywords and phrases. The phrases improve your SEO strategy surrounds the actions taken to assure your website can be found in a search engine&#39;s results page when surfing for words or phrases related to the content on your website. In short, it means discovering ways to increase your site&#39;s coming in web visitors&#39; search results.</p>\r\n\r\n<p>A content strategy is an approach every business needs and creates by distributing content for their target audience, to attract the right users who will turn out to be their customers by using their products, and in the future, they will remain to be their customers. Content strategy is successful when one seeks to understand what their audience wants and needs, and focuses on developing content that is attractive, relevant, educational or anywhere valuable to them.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>You must always know the purpose of the content, otherwise, it will only be a costly and time-consumed mistake. So how are you going to create your strategy? Well, I am no king of the market, however, Let me give you some tips and hints over it. There are exactly 7 steps for your own&nbsp;<a href=\"https://www.tranktechnologies.com/digital-marketing\">content strategy in SEO</a>. And those are,</p>\r\n\r\n<ol>\r\n	<li>Set your Goals and Determine your destined audience.</li>\r\n	<li>Create Content with linkbacks.</li>\r\n	<li>Manage the SEO angle and do keyword research.</li>\r\n	<li>Examine the competition.</li>\r\n	<li>Choose the channels/websites through which you distribute.</li>\r\n	<li>Develop an Editorial Calendar.</li>\r\n	<li>Cultivate credibility on your topic.</li>\r\n</ol>\r\n\r\n<h3>Concentrate on your end-business goal(s) and determine your target audience</h3>\r\n\r\n<p>When you know what you want at the end of the business, you will be focused. You know what to write in your content, how to write to lure in your audience and how strongly you can convert them into your customers and make them retain as it is. Analytics tools could be page views, social media shares or e-commerce conversions. Learn your target audience by their journey of the discovery phase, to the consideration phase until the point of purchase, to becoming a repeat customer. Develop content in a way that attracts your destined target audience leads their way into a purchase always.</p>\r\n\r\n<h3>Create contents with linkbacks</h3>\r\n\r\n<p>Create content that even&nbsp;<strong>Wikipedia&nbsp;</strong>would like to link to. Linkbacks are links that backup you to the original from the former. Deadlinks are one way to get into Wikipedia and more traffic will appear for your websites and contents. It is to publish killer content and letting the crowds link back to it. This is the only real way to persistent SEO success.</p>\r\n\r\n<h3>Manage the SEO angle and do keyword research</h3>\r\n\r\n<p>SEO is about more than just blog articles and linkbacks. SEO is about optimizing the robots.txt, improving metadata, using proper tags, and building a strategic sitemap. This technical optimization is for the good of the user &mdash; whether the user is searching, selecting, or reading your content. It&#39;s accurate to think of these improvements from a user experience (UX) viewpoint. These technical SEO components are here, in order to assist the user and elevate your content.</p>\r\n\r\n<p>Search advertising is all about keywords. One needs to find the right keywords so that the contents/websites appear in front of more interested audiences. Why do you want all these robot.txt, right tags, good sitemap? So the content can get high traffics, accurate search results and more readers. Each content is publicized to relevant searches made by a random internet user. That is, the keywords used in the display contents should be determined properly as it is used to decide the amount of traffic in one ad. Once you have the right list of keywords you are aiming for, you can write content using/around them, in a way it benefits your visitors as well. Choosing the right keyword brings a higher rank for your ad and cost less.</p>\r\n\r\n<h3>Examine the Competition</h3>\r\n\r\n<p>Analyze the topics, keywords, and length of the content on your competitors&#39; website or other distribution channels. If you find fields where your competitors&#39; content or/and have content that&#39;s lacking, you can fill in the gaps and produce better value to your target business. Look at what your competitors are doing, but more importantly, look at what they&#39;re not doing.</p>\r\n\r\n<h3>Choose the channels/websites through which you distribute.</h3>\r\n\r\n<p>Don&#39;t let the endless amount of distribution channels overwhelm your teams. There is a famous quote saying that being too much available to anyone makes them value the presence less. Well yes, that&#39;s true and it works like magic here. You should choose and select a handful of channels to distribute your content. Channels such as a blog or a YouTube channel will lure and make the right audience to give in the efforts and time to spend in your content/ads. Must always focus on the right people to distribute your content through the right channels, and do not waste your essence by spilling it over everything.</p>\r\n\r\n<h3>Develop an Editorial Calendar.</h3>\r\n\r\n<p>Once you have decided on your distribution channels, design an editorial calendar to weed out the essential details of where and when this content will be made available. An editorial calendar is something that will help you keep track of your content and see that you are distributing content consistently. It is like you mark the date of your publishing today, and in another week or so, you will have your reminder to publish another. Another one is that you should concentrate on writing high-quality content that is in-depth as an ordinary content length for a web page that lists on page 1 of Google is at least 2000 words. While writing more in-depth, thorough content, it will increase your search engine rankings. Once you have started publishing high quality content, you can increase the quantity of the content you write. This way will always increase the traffic and attention you may get for your websites and contents.</p>\r\n\r\n<h3>Cultivate credibility on your topic.</h3>\r\n\r\n<p>By doing surveys, you can figure out why your visitors are not becoming your customers. All you have to enquire about is like:</p>\r\n\r\n<ul>\r\n	<li>What else would you like to be added to our websites?</li>\r\n	<li>Is there any reason why you don&#39;t like our products and won&#39;t recommend it to anyone?</li>\r\n	<li>What are the changes you would like to suggest/recommend to our products/services?</li>\r\n</ul>\r\n\r\n<p>Once you have a list of questions your visitors have, consider formulating an FAQ section that answers their questions/queries. This won&#39;t strike you with a ton of traffic, but the traffic you do get will be highly relevant search traffic that converts into customers, slowly.</p>\r\n\r\n<p>Don&#39;t try to shape search engines by linking to your site, link it to your site only when it benefits the readers. Must always cross-link all of your websites and create a good site architecture so that it ensures all of your pages are indexed.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>By blending your content marketing efforts with your SEO techniques, you will find that you can increase your equipped search traffic at a faster speed.</p>', '447200.png', '2023-02-02 15:02:37', '2023-02-02 15:02:37'),
(2, 1, NULL, 'Why is SEO Necessary for a Marketing Automation Strategy', 'why-is-seo-necessary-for-a-marketing-automation-strategy', NULL, NULL, NULL, 'SEO basically stands for Search Engine Optimization. The abbreviation gives it all. It is a process where organizations undergo to make sure that their site ranks high in the search engines for relevant keywords and phrases.', '<p>SEO basically stands for&nbsp;<strong>Search Engine Optimization</strong>. The abbreviation gives it all. It is a process where organizations undergo to make sure that their site ranks high in the search engines for relevant keywords and phrases. The phrases develop your SEO strategy and take care of the actions taken to ensure that your website is able to be found in a search engine&#39;s results page when surfing for words or phrases linked to the content on your website. In short, it means discovering ways to increase your site&#39;s coming in web visitors&#39; search results.</p>\r\n\r\n<p>On the other hand, Marketing automation means to refer to the technologies and software platforms specifically designed for marketing departments of an organization and/or for the whole organization to market on several channels such as email, social media, websites, etc., online and automate repetitive tasks, more effectively than the traditional methods of marketing. It was often seen as a subset of&nbsp;<strong>Customer Relationship Management (CRM)</strong>, empowering marketing divisions to boost efficiency. It is well known by now that there is a very strong link between marketing automation, content management, content marketing, and other platforms.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>If Marketing automation must be a success, it depends on several aspects such as ease-of-use of internal resources, the efficiency of it, offers to be given and highly timely relevant content. Without appropriate and result-oriented content, depending on the customer lifecycle, marketing automation fails. The shortage of suitable and timely content is an intense challenge for most marketers and marketing tactics, which includes content marketing and email marketing. Content marketing is where you observe your customers and visitors to your website and publish articles in order to attract them to turn into a regular customer of yours. SEO is used to allure more heads to your website. Marketing automation software is used to fascinate, form, nourish, and transform leads after they have crash-landed on your site. A high search engine ranking is the only way to clutch your company ahead of your competitors. Well, in the experience of being a customer time-to-time, you know that unless someone is doing comparison shopping, they are more likely to look at the first very few websites on the first page of the results in any search engine. SEO is a method to keep your company at the high ranking of the search results of the search engines you choose to be top in, which in turn, draws in more traffic to your website. And traffic holds your website in the top results always. A way to be stagnant in the top results and be visible and available to any relevant market opening up because of the needs of the customers.</p>\r\n\r\n<p>Companies need to concentrate on SEO before they exercise marketing automation software. This will develop the number of leads the software can pursue. The software will then profile the leads and place each one based on their possibility of conversion. Leads that are revealing signs of conversion will be immediately put through onto the sales team. A marketing automation strategy should also entail nurturing any leads that are not fit to be passed onto sales. This could be done by employing customized email campaigns, newsletters, and/or helpful how-to articles. To maintain the flow of new traffic, efforts that are put into nurturing the leads must consider SEO. Any content connected to your website is a chance to improve your search engine ranking using strategically placed relevant keywords and meta-tags.</p>\r\n\r\n<p>In today&#39;s growing and competitive marketplace, businesses must always be ready to employ any and every marketing tactic and methods that will give them a competitive leap online. Their strategy must always incorporate SEO, social media marketing and a marketing automation strategy. These strategies always complement and enhance one another&#39;s results. It can also, at times, double or triple a company&#39;s existing sales when they are effectively combined. That is how SEO becomes necessary/mandatory when marketing automation strategy has to be made a success.</p>', '663793.png', '2023-02-05 03:38:18', '2023-02-05 03:38:18'),
(3, 1, NULL, 'The Importance of Sound Proofing the Home', 'the-importance-of-sound-proofing-the-home', NULL, NULL, NULL, NULL, '<p>When you are building your home, especially in an urbanized place, it is natural that you would be able to hear the sounds of the outside environment. Moreover, there is also a chance that you would want to make sure that even the sound of the next room cannot be heard.</p>\r\n\r\n<p>In fact, many builders often make sure that homes are built in manner that would sound proof. There are many reasons for this, which this article would highlight. Without further ado, here are just four reasons on why your home should be sound proofed.</p>\r\n\r\n<p><strong>Health</strong></p>\r\n\r\n<p>The first thing that sound proofing does is not allow any sound from the outside come inside the home. This is quite evident in urbanised homes, where the home is next to a busy street. Doctors argue that if there is no proper sound proof, then it would affect your sleep pattern, which can result in a health problem in the future. Therefore, there is a need to make sure that the sound coming into the house is minimal. For this, builders often use something called a&nbsp;<a href=\"https://www.airmet.com.au/products/noise-sound-and-vibration-monitors\">sound level meter</a>&nbsp;to make sure that the decibels that come into the home is not too much.</p>\r\n\r\n<p><strong>Safety</strong></p>\r\n\r\n<p>Sound proofing your home would also lead to safety as well. The reason is due to the fact that high sound levels could emit a lot of vibration. The more vibration there is, the higher possibility that your ornaments and even other fittings could get damaged. In other words, you might literally feel like an earthquake is happening if the sound level is really high. This could impede your safety even in your own home. Thus, the reason as to why sound proofing is important. This helps in keeping the occupants safe.</p>\r\n\r\n<p><strong>Peace</strong></p>\r\n\r\n<p>Then there is keeping the peace. When you are in a home that is properly sound proofed, you would not have to worry about the sound creeping in. As a result, you would be left with a peaceful mind. In other words, you could easily meditate and not be drowned out by the noises of the outside world. This is also known to reduce stress and improve productivity of the occupants as well. Of course, this can sometimes be a peripheral reason, but still is a reason to justify the notion of sound proofing your home</p>\r\n\r\n<p><strong>Less Distractions</strong></p>\r\n\r\n<p>It is natural that when you are doing work at your home, you would always want to do it in a manner that would be productive. In other words, without any sort of distraction. Sound proofed rooms help you achieve that since the sound from the next room does not even creep into the room you are doing work. Therefore, you would not have to experience anxiety or any sort of stress when you are doing your work. Your mood as a whole would always be focused and calm at the same time.</p>\r\n\r\n<p>Overall, the mentioned are just some of reasons that justify the sound proofing of your home.</p>', '486533.png', '2023-02-05 06:54:49', '2023-02-05 06:54:49'),
(4, 2, NULL, 'Best website Download Video From YouTube, Facebook, Instagram & Twitter', 'best-website-download-video-from-youtube-facebook-instagram--twitter', NULL, NULL, NULL, NULL, '<p>Watched a funny video and couldn&#39;t find a way to save it to show it to your friends later? Listened to a song on YouTube, but not able to find one proper website to download it? Watched an educational video but not able to download it for further reference? Here is the solution to these kinds of problems. Happened come across a song from your favorite artist on Twitter but is not able to find an&nbsp;<a href=\"https://www.youtube2video.com/en/mp3-converter\"><strong>online MP3 converter</strong></a>&nbsp;that has the audio of the song to download.&nbsp;</p>\r\n\r\n<p>Well, A&nbsp;<strong><a href=\"https://mac.eltima.com/youtube-downloader-mac.html\">video converter</a></strong>&nbsp;has become one of the most used applications and a solution to all sorts of video/audio troubles. A video converter is an application/website that converts your video with certain details given, downloads it to your device in the highest quality you may need. Why would not anyone expect the best and flexibility from it?</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;A video is posted every minute and second in our expanding world. And, to catch the best out of all your audiences, one will always need a flexible and easy to do way. And before even jumping into buying a subscription in a random application that blindly promises to get your video downloaded to your device, you need to know what features a video converter must have to be used.</p>\r\n\r\n<h3>The features you must look into a good online video converter/downloader are:</h3>\r\n\r\n<ul>\r\n	<li><strong>Step 1.</strong>&nbsp;Conversion of multiple video and audio formats into one video.</li>\r\n	<li><strong>Step 2.</strong>&nbsp;Conversion between one format to another, eg.<strong>MP2, WMA, WAV, MP3, AAC, AIFF, AC3, Digital Surround Audio, Apple Lossless, ALAC, AU, DTS FLAC, M4A, OGG, Opus, RA</strong>, etc.</li>\r\n	<li><strong>Step 3.</strong>&nbsp;Creates the existing video into a 100% high-quality video.</li>\r\n	<li><strong>Step 4.</strong>&nbsp;Adjust video settings easily: speed of the video, change video resolution and frame rate of output files, increase video volume, etc.</li>\r\n	<li><strong>Step 5</strong>. To do basic editing such as Crop video parts to remove black bars; Trim and cut video segment as you wish; Rotate videos along 90 or 180 degrees; Add subtitles in any format, like, SRT, SSA, ASS to your movie; Edit subtitles size, color, and font; Extract subtitles from video, remove subtitles from videos, adjust speed, brightness, saturation, and contrast, grayscale, etc.</li>\r\n	<li><strong>Step 6.</strong>Compatibility with all the types of mobile OS and formats, eg: iO,iPad, iPod, iPhone, Apple TV, Windows, Android, PSP, Xbox, BlackBerry, etc.</li>\r\n</ul>\r\n\r\n<p>And what if all these can be done in one single click? It would save a bunch of time of ours. And that is what we provide you through this website.</p>\r\n\r\n<h3>&nbsp;All you have to do is,</h3>\r\n\r\n<ul>\r\n	<li><strong>Step 1.&nbsp;</strong>Find the music you love.</li>\r\n	<li><strong>Step 2.</strong>&nbsp;Copy the URL of the video or music from twitter, or if it is from your device, find its storage disk.</li>\r\n	<li><strong>Step 3.</strong>&nbsp;Go to our website.</li>\r\n	<li><strong>Step 4.</strong>&nbsp;Paste the URL in the textbox right on the homepage, or, if it is from your device, click on &#39;convert from your device&#39;, update your music into the website.</li>\r\n	<li><strong>Step 5</strong>. Select the format you want the video/music to get converted to.</li>\r\n	<li><strong>Step 6</strong>.&nbsp;Click &quot;<strong>Convert</strong>&quot;.</li>\r\n	<li><strong>Step 7.</strong>&nbsp;Your music gets downloaded to your device and you can enjoy listening to it anytime.</li>\r\n</ul>\r\n\r\n<p>The video can be from any website such as&nbsp;<strong>YouTube, Vimeo, Facebook, Flickr, and Daily Motion</strong>, etc, and We will convert it for free. There is no need for registering your ID on this website. You don&#39;t have to log in to use the website. That&#39;s how it works for all the continents that have access to the website.&nbsp;</p>\r\n\r\n<p>Any conversion is done, can be downloaded at a high speed. It does not take much time just because it has been converted and either it has lesser or more storage, it is always quick. The website is free and safe to use. There are a lot of cybercrimes happening around. The website does not take away your privacy that is promised in our terms and conditions. More to the point, the website is free to use anytime and for a countless number of times.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Especially, the website supports all kinds of browsers, for instance,&nbsp;<strong>Google Chrome, Mozilla Firefox, Internet Explorer, Bing</strong>, etc. It works smoothly on any platform and stays at its highest speed. And, the website works according to the device you use.</p>\r\n\r\n<p>Yes, The website supports all languages such as&nbsp;<strong>English, French, Spanish, Portuguese and Turkish</strong>. Most of all, there is no registration needed. You can directly convert your videos and for regular updates, you can sign in, if you want, through any of your social media accounts. To find a Video Converter that converts your favorite video from any social media, into a video or an mp3, this is the easiest and best way possible to do.</p>', '720590.png', '2023-02-05 06:57:26', '2023-02-05 06:57:26'),
(5, 1, NULL, 'Test Post', 'test-post', NULL, NULL, NULL, 'sdfsfds sdfdsfs', NULL, '648979.PNG', '2023-02-15 13:39:38', '2023-02-15 13:39:38');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `question_ans` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Yogesh Kumar', 'admin@gmail.com', NULL, '$2a$12$lgbl9tSdUS44li7jo1Q.k.C2E4ZJXVWbQ2dL3x2WikK5Is8nouf1C', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`) USING HASH,
  ADD KEY `posts_cate_id_foreign` (`cate_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`),
  ADD KEY `question_post_id_foreign` (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_cate_id_foreign` FOREIGN KEY (`cate_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
