-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2025 at 08:47 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prism`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `photo` varchar(2500) DEFAULT NULL,
  `status` int(11) DEFAULT 1 COMMENT '1=>active, 0=>deactive',
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  `deleted_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `description`, `photo`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'We Make Your Dreams Come True', 'Prism Interior and Decor delivers quality construction, renovation, and interior design with creativity and precision.', '174262308567de516d6fafa7.jpg', 1, '2025-03-22 00:23:58.000000', '2025-03-22 00:47:04.000000', NULL),
(2, 'We Make Your Dreams Come True', 'Prism Interior and Decor delivers quality construction, renovation, and interior design with creativity and precision.', '174262433367de564d64eb21.jpg', 1, '2025-03-22 00:48:53.000000', '2025-03-22 00:48:53.000000', NULL),
(3, 'We Make Your Dreams Come True', 'Prism Interior and Decor delivers quality construction, renovation, and interior design with creativity and precision.', '174262433767de5651471532.jpg', 1, '2025-03-22 00:48:57.000000', '2025-03-22 00:48:57.000000', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT 1 COMMENT '1=>active, 0=>inactive',
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  `deleted_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `mobile` varchar(250) DEFAULT NULL,
  `subject` varchar(250) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  `deleted_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(11) NOT NULL,
  `question` longtext DEFAULT NULL,
  `answer` longtext DEFAULT NULL,
  `status` int(11) DEFAULT 1 COMMENT '0=>inactive, 1=>active',
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  `deleted_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'What services does PRISM - Interior & Decor offer?', 'We specialize in interior design, home and office décor, space planning, furniture selection, and customized styling to enhance your living and working spaces.', 1, '2025-03-31 23:21:14.000000', '2025-03-31 23:26:06.000000', NULL),
(2, 'Can you work within a specific budget?', 'Yes! We offer design solutions tailored to your budget while maintaining quality and aesthetics.', 1, '2025-03-31 23:21:14.000000', '2025-03-31 23:21:14.000000', NULL),
(3, 'Do you provide 3D design previews before starting the project?', 'Absolutely! We create 3D visualizations and mood boards to help you visualize the final outcome before implementation.', 1, '2025-03-31 23:21:14.000000', '2025-03-31 23:21:14.000000', NULL),
(4, 'How long does a typical interior design project take?', 'The timeline depends on the project\'s scope, but a typical home interior design takes between 4 to 12 weeks.', 1, '2025-03-31 23:21:14.000000', '2025-03-31 23:21:14.000000', NULL),
(5, 'Do you handle both residential and commercial interior projects?', 'Yes! We cater to residential, commercial, and office spaces, ensuring a perfect blend of functionality and style.', 1, '2025-03-31 23:21:14.000000', '2025-03-31 23:21:14.000000', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` int(11) NOT NULL,
  `email` varchar(250) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  `deleted_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`id`, `email`, `date`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admin@gmail.com', '2025-03-24', '2025-03-24 12:41:56.000000', '2025-03-24 12:41:56.000000', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `image` varchar(2500) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `long_description` longtext DEFAULT NULL,
  `status` int(11) DEFAULT 1 COMMENT '1=>active,0=>inactive',
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  `deleted_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `documents` varchar(2500) DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  `deleted_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT 1 COMMENT '1 =>active,0 =>inactive\r\n',
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  `deleted_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', 1, '2024-06-20 11:41:06.000000', '2024-06-25 20:16:55.000000', NULL),
(2, 'Sub Admin', 0, '2024-06-20 11:41:19.000000', '2024-07-01 00:04:24.000000', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `mobile` varchar(250) DEFAULT NULL,
  `mobile_2` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `instagram_link` varchar(250) DEFAULT NULL,
  `twitter_link` varchar(250) DEFAULT NULL,
  `facebook_link` varchar(250) DEFAULT NULL,
  `youtube_link` varchar(250) DEFAULT NULL,
  `privacy_policy` longtext DEFAULT NULL,
  `terms_condition` longtext DEFAULT NULL,
  `logo` varchar(2500) DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  `deleted_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `mobile`, `mobile_2`, `email`, `address`, `instagram_link`, `twitter_link`, `facebook_link`, `youtube_link`, `privacy_policy`, `terms_condition`, `logo`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'PRISM', '9870966905', '8578082856', 'admin@test.com', 'Moh. Qila Deoband (Sajaranpur)', NULL, NULL, NULL, NULL, '<p><strong>Privacy Policy for NEO DERMA LIFE SCIENCES</strong></p>\r\n\r\n<p><strong>Effective Date:</strong> [Insert Date]</p>\r\n\r\n<p>NEO DERMA LIFE SCIENCES (&quot;we,&quot; &quot;us,&quot; or &quot;our&quot;) is committed to protecting your privacy. This Privacy Policy outlines our practices regarding the collection, use, and disclosure of information that you provide to us through our website, products, and services.</p>\r\n\r\n<p><strong>1. Information We Collect</strong></p>\r\n\r\n<p>We collect several types of information to provide and improve our services, including:</p>\r\n\r\n<ul>\r\n	<li><strong>Personal Information:</strong> This includes your name, email address, mailing address, phone number, and payment information.</li>\r\n	<li><strong>Product Information:</strong> Details about the products you purchase or inquire about, including hair and skin care products.</li>\r\n	<li><strong>Usage Information:</strong> Information about how you interact with our website, such as IP address, browser type, pages visited, and the time and date of your visit.</li>\r\n	<li><strong>Communication Information:</strong> Information contained in your communications with us, including emails, chat messages, and phone calls.</li>\r\n</ul>\r\n\r\n<p><strong>2. How We Use Your Information</strong></p>\r\n\r\n<p>We use the information we collect for various purposes, including:</p>\r\n\r\n<ul>\r\n	<li><strong>To Process Orders:</strong> To process and fulfill your orders for our hair and skin care products, including any other related products.</li>\r\n	<li><strong>To Improve Our Services:</strong> To understand how our services are used and to enhance and personalize your experience with NEO DERMA LIFE SCIENCES.</li>\r\n	<li><strong>To Communicate with You:</strong> To send you updates, newsletters, marketing materials, and other information that may be of interest to you. You can opt-out of these communications at any time.</li>\r\n	<li><strong>To Provide Customer Support:</strong> To address your inquiries, handle complaints, and provide support related to our products and services.</li>\r\n	<li><strong>To Comply with Legal Obligations:</strong> To comply with applicable laws, regulations, and legal processes.</li>\r\n</ul>\r\n\r\n<p><strong>3. Sharing Your Information</strong></p>\r\n\r\n<p>We do not sell your personal information. We may share your information with third parties only in the following circumstances:</p>\r\n\r\n<ul>\r\n	<li><strong>Service Providers:</strong> We may share your information with third-party service providers who perform services on our behalf, such as payment processing, shipping, and marketing.</li>\r\n	<li><strong>Legal Requirements:</strong> We may disclose your information if required to do so by law or in response to a valid request from a governmental authority.</li>\r\n	<li><strong>Business Transfers:</strong> In the event of a merger, acquisition, or sale of all or a portion of our assets, your information may be transferred to the new owner.</li>\r\n</ul>\r\n\r\n<p><strong>4. Security of Your Information</strong></p>\r\n\r\n<p>We take reasonable measures to protect your information from unauthorized access, use, or disclosure. However, no method of transmission over the internet or method of electronic storage is completely secure, so we cannot guarantee its absolute security.</p>\r\n\r\n<p><strong>5. Your Rights and Choices</strong></p>\r\n\r\n<p>You have certain rights regarding your personal information, including:</p>\r\n\r\n<ul>\r\n	<li><strong>Access and Correction:</strong> You can request access to and correction of your personal information.</li>\r\n	<li><strong>Deletion:</strong> You can request the deletion of your personal information, subject to certain exceptions.</li>\r\n	<li><strong>Opt-Out:</strong> You can opt-out of receiving marketing communications from us at any time by following the unsubscribe instructions provided in the communication.</li>\r\n</ul>\r\n\r\n<p><strong>6. Children&#39;s Privacy</strong></p>\r\n\r\n<p>Our services are not intended for children under the age of 13, and we do not knowingly collect personal information from children under 13. If we become aware that we have collected personal information from a child under 13, we will take steps to delete such information.</p>\r\n\r\n<p><strong>7. Changes to This Privacy Policy</strong></p>\r\n\r\n<p>We may update this Privacy Policy from time to time to reflect changes in our practices or for other operational, legal, or regulatory reasons. We will notify you of any changes by posting the new Privacy Policy on our website. Your continued use of our services after such changes have been posted constitutes your acceptance of the new Privacy Policy.</p>\r\n\r\n<p><strong>8. Contact Us</strong></p>\r\n\r\n<p>If you have any questions about this Privacy Policy or our privacy practices, please contact us at:</p>\r\n\r\n<p>NEO DERMA LIFE SCIENCES<br />\r\n[Insert Contact Information]</p>', '<p><strong>Terms &amp; Conditions for NEO DERMA LIFE SCIENCES</strong></p>\r\n\r\n<p><strong>Effective Date:</strong> [Insert Date]</p>\r\n\r\n<p>Welcome to the NEO DERMA LIFE SCIENCES website. By accessing or using our website, products, and services, you agree to be bound by these Terms &amp; Conditions. Please read them carefully.</p>\r\n\r\n<p><strong>1. Acceptance of Terms</strong></p>\r\n\r\n<p>By using our services, you agree to comply with and be bound by these Terms &amp; Conditions and our Privacy Policy. If you do not agree with these terms, please do not use our services.</p>\r\n\r\n<p><strong>2. Use of Our Services</strong></p>\r\n\r\n<p>You agree to use our website, products, and services only for lawful purposes and in accordance with these Terms &amp; Conditions. You are responsible for ensuring that your use of our services does not violate any applicable laws, regulations, or third-party rights.</p>\r\n\r\n<p><strong>3. Product Information</strong></p>\r\n\r\n<p>We strive to ensure that the information provided on our website is accurate and up-to-date. However, we do not warrant the accuracy, completeness, or reliability of any information on our website, including product descriptions, pricing, and availability. We reserve the right to correct any errors or omissions and to change or update information at any time without prior notice.</p>\r\n\r\n<p><strong>4. Orders and Payments</strong></p>\r\n\r\n<ul>\r\n	<li><strong>Order Acceptance:</strong> Your order constitutes an offer to purchase our products. We reserve the right to accept or reject your order for any reason.</li>\r\n	<li><strong>Pricing:</strong> All prices are subject to change without notice. Prices do not include applicable taxes, shipping, and handling charges.</li>\r\n	<li><strong>Payment:</strong> You agree to provide accurate and complete payment information. By submitting your payment information, you authorize us to charge the applicable payment method for your order.</li>\r\n</ul>\r\n\r\n<p><strong>5. Shipping and Delivery</strong></p>\r\n\r\n<p>We will make reasonable efforts to ensure that your order is processed and shipped promptly. However, we are not responsible for any delays in delivery that are beyond our control. Risk of loss and title for products purchased from us pass to you upon delivery of the products to the carrier.</p>\r\n\r\n<p><strong>6. Returns and Refunds</strong></p>\r\n\r\n<p>Please refer to our Return Policy for information on returns and refunds. We reserve the right to refuse returns or refunds that do not comply with our policy.</p>\r\n\r\n<p><strong>7. Intellectual Property</strong></p>\r\n\r\n<p>All content on our website, including text, graphics, logos, images, and software, is the property of NEO DERMA LIFE SCIENCES or its licensors and is protected by intellectual property laws. You may not use, reproduce, distribute, or create derivative works from our content without our prior written consent.</p>\r\n\r\n<p><strong>8. User Conduct</strong></p>\r\n\r\n<p>You agree not to:</p>\r\n\r\n<ul>\r\n	<li>Use our services in any manner that could disable, overburden, or impair our website or interfere with any other party&rsquo;s use of our services.</li>\r\n	<li>Attempt to gain unauthorized access to our services, user accounts, or computer systems.</li>\r\n	<li>Use any automated means to access our website or services for any purpose without our express written consent.</li>\r\n</ul>\r\n\r\n<p><strong>9. Disclaimer of Warranties</strong></p>\r\n\r\n<p>Our services are provided &quot;as is&quot; and &quot;as available,&quot; without any warranties of any kind, express or implied. We do not warrant that our services will be uninterrupted, error-free, or free from viruses or other harmful components. To the fullest extent permitted by law, we disclaim all warranties, express or implied, including, but not limited to, implied warranties of merchantability, fitness for a particular purpose, and non-infringement.</p>\r\n\r\n<p><strong>10. Limitation of Liability</strong></p>\r\n\r\n<p>To the fullest extent permitted by law, NEO DERMA LIFE SCIENCES and its affiliates, officers, directors, employees, and agents will not be liable for any indirect, incidental, special, consequential, or punitive damages arising out of or in connection with your use of our services, even if we have been advised of the possibility of such damages. Our total liability to you for any claims arising out of or in connection with these Terms &amp; Conditions or your use of our services will not exceed the amount paid by you, if any, for accessing our services.</p>\r\n\r\n<p><strong>11. Indemnification</strong></p>\r\n\r\n<p>You agree to indemnify, defend, and hold harmless NEO DERMA LIFE SCIENCES and its affiliates, officers, directors, employees, and agents from and against any and all claims, liabilities, damages, losses, costs, expenses, or fees (including reasonable attorneys&rsquo; fees) arising from your use of our services or your violation of these Terms &amp; Conditions.</p>\r\n\r\n<p><strong>12. Governing Law</strong></p>\r\n\r\n<p>These Terms &amp; Conditions are governed by and construed in accordance with the laws of [Insert Jurisdiction], without regard to its conflict of law principles. Any disputes arising out of or relating to these Terms &amp; Conditions or your use of our services will be resolved exclusively in the state or federal courts located in [Insert Jurisdiction].</p>\r\n\r\n<p><strong>13. Changes to These Terms &amp; Conditions</strong></p>\r\n\r\n<p>We may update these Terms &amp; Conditions from time to time to reflect changes in our practices or for other operational, legal, or regulatory reasons. We will notify you of any changes by posting the new Terms &amp; Conditions on our website. Your continued use of our services after such changes have been posted constitutes your acceptance of the new Terms &amp; Conditions.</p>\r\n\r\n<p><strong>14. Contact Us</strong></p>\r\n\r\n<p>If you have any questions about these Terms &amp; Conditions or our services, please contact us at:</p>\r\n\r\n<p>NEO DERMA LIFE SCIENCES<br />\r\n[Insert Contact Information]</p>', '174283977767e19fe1dc3a6PRISM_2-removebg-preview.png', NULL, '2025-03-24 12:39:37.000000', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `user_name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `mobile` varchar(250) DEFAULT NULL,
  `password` varchar(2500) DEFAULT NULL,
  `confirm_password` varchar(250) DEFAULT NULL,
  `photo` varchar(2500) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0=>inactive, 1=>active',
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  `deleted_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `user_name`, `email`, `mobile`, `password`, `confirm_password`, `photo`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Rahul', 'admin@gmail.com', 'test@gmail.com', '00000000000', '$2y$10$Uzd5.GGMi/wTuOIFbInOq.G8VwaH1wUj/BvVs7lNmxPW66aHndoD2', '12345678', '171891123366748101e282eposter.jpg', 1, '2024-06-20 11:28:11.000000', '2025-03-24 12:31:51.000000', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
