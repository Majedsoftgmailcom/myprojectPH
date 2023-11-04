-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2022 at 02:41 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `article_table`
--

CREATE TABLE `article_table` (
  `id` int(11) NOT NULL,
  `title` varchar(90) NOT NULL,
  `article` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article_table`
--

INSERT INTO `article_table` (`id`, `title`, `article`, `date`) VALUES
(1, 'أعراض الضغط المنخفض\r\n', 'يعد ضغط الدم منخفضًا عندما تبلغ قراءة الضغط الانقباضي أقل من 90 ملليمتر زئبق وقراءة الضغط الانبساطي أقل من 60 ملليمتر زئبق، وحتى الآن من غير المعروف سبب الإصابة بانخفاض ضغط الدم إلا أن بعض الحالات الصحية من شأنها أن تسبب انخفاضه.\r\n\r\nوتترافق الإصابة بضغط الدم المنخفض مع عدد من الأعراض المختلفة، لكن ما هي أعراض الضغط المنخفض؟ ومتى عليك استشارة الطبيب؟\r\n\r\nأعراض الضغط المنخفض\r\nفي بعض الحالات قد لا تترافق الإصابة بانخفاض ضغط الدم مع أية أعراض، إلا أنه في حال الانخفاض المفاجئ أو الشديد فقد تترافق الحالة مع أعراض مختلفة.\r\n\r\n1. أعراض ضغط الدم المنخفض الشائعة\r\nفيما يأتي نذكر أهم أعراض الضغط المنخفض:\r\n\r\nدوار أو دوخة.\r\nإغماء أو فقدان الوعي.\r\nتشويش في الرؤية.\r\nغثيان.\r\nتعب مفاجئ.\r\nعدم القدرة على التركيز.\r\nجفاف.\r\nعطش مفاجئ وشديد.\r\n2. أعراض انخفاض ضغط الدم الشديدة\r\nأما انخفاض ضغط الدم الشديد فقد يترافق مع أعراض أخرى أكثر خطورة، وهي على النحو الآتي:\r\n\r\nارتباك.\r\nشحوب وبرود في البشرة.\r\nضيق وتسارع في التنفس.\r\nضعف وتسارع في النبض.\r\nمتى عليك استشارة الطبيب؟\r\nمن الضروري أن تقوم باستشارة الطبيب فورًا في حال ظهور أعراض الضغط المنخفض الشديد المذكورة سابقًا.\r\n\r\nوفي بعض الأحيان من الممكن أن تعاني من مشكلة انخفاض ضغط الدم المزمن، وهذا الأمر لا يستدعي القلق.\r\n\r\nوالجدير بالذكر أنه على المصاب متابعة وضعه الصحي ومعرفة الأمور التي من شأنها أن تسبب هبوطًا متزايدًا في ضغط الدم لديه، وإخبار الطبيب عنها.\r\n\r\nأنواع الضغط المنخفض\r\nيوجد عدة أنواع لانخفاض ضغط الدم والتي تصنف وفقًا لوقت حدوثها، وهي على النحو الآتي:\r\n\r\n1. انخفاض ضغط الدم الانتصابي (Orthostatic hypotension)\r\nوهو انخفاض في ضغط الدم يحدث عندما تكون جالسًا أو مستلقيًا وتقف مرة واحدة.\r\n\r\nوهذا النوع من انخفاض ضغط الدم شائعًا لدى معظم الناس، ويترافق مع دوار وتشويش في الرؤية يزول بسرعة.\r\n\r\n2. انخفاض ضغط الدم بعد الأكل\r\nمن اسمه يحدث هذا النوع من انخفاض ضغط الدم بعد تناول الطعام.\r\n\r\nويصيب هذا النوع من انخفاض ضغط الدم كبار السن، وبالأخص المصابين بمرض باركنسون.\r\n\r\n3. انخفاض ضغط الدم بسبب الوقوف\r\nيحدث هذا النوع نتيجة الوقوف لفترة طويلة من الزمن أو بسبب الأحداث العاطفية، وهو أكثر شيوعًا بين الأطفال مقارنة مع البالغين.\r\n\r\n4. انخفاض ضغط الدم الشديد\r\nيترافق مع صدمة للجسم وذلك نتيجة عدم حصول أعضاء جسم الإنسان على الدم والأكسجين اللازم لعملها.\r\n\r\nهذا النوع من انخفاض ضغط الدم قد يهدد حياة المصاب في حال عدم تلقي العلاج المناسب.\r\n', '2022-10-21'),
(2, 'فوائد اليانسون لصحتك وراحة بالك\r\n', 'اليانسون هو أحد الأعشاب المعمرة والتي تم استخدام بذورها وزيوتها العطرية منذ القدم في عالم الطب والأعشاب، وتعود أصولها إلى منطقة البحر المتوسط والشرق الأوسط، ولطالما اشتهرت في منطقة النيل وعند المصريين القدامى، تعرف على فوائد اليانسون لصحتك في هذا المقال:\r\n\r\nفوائد اليانسون\r\nيوجد العديد من فوائد اليانسون التي تعود على صحة الإنسان وتعالج مختلف المشكلات الطبية، ونذكر من هذه الفوائد ما يأتي:\r\n\r\n1. تعزيز صحة الجهاز الهضمي\r\nمن فوائد اليانسون أهميته بشكل خاص للجهاز الهضمي، لا سيما في النواحي الآتية:\r\n\r\nتعزيز عملية الهضم: يساهم تناول اليانسون في تعزيز عملية الهضم وتليين المعدة، وكان يستخدم مغلي بذور اليانسون منذ القدم بعد تناول وجبة دسمة للمساعدة على الهضم.\r\nمعالجة الإمساك: لليانسون وزيته خصائص ملينة، فهو مسهل طبيعي يساهم في علاج الإمساك والوقاية منه، كما يساعد في علاج عسر الهضم والتخلص من نفخة البطن.\r\nطرد الغازات: لليانسون دور فعال في طرد الغازات، حيث يُسبب عدم معالجة مشكلة الغازات في تطور أمراض على المدى البعيد، مثل: الآم المعدة، والآم حادة في الصدر، وتشنج العضلات. \r\n2. تعزيز الشهية\r\nمن فوائد اليانسون أنه قد يكون معزز للشهية عن طريق تحفيزه لإفراز الأنزيمات الهاضمة في المعدة، مما يساعد في تعزيز عملية الهضم وتعزيز الشهية.\r\n\r\n3. تعزيز صحة الجهاز التنفسي\r\nوُجد بأن شرب مغلي حبوب اليانسون يساعد في علاج الربو والمشكلات التنفسية المختلفة، كما يساعد في تقليل الاحتقان في المجاري التنفسية وعلاج التهابات الشعب الهوائية، وبالتالي فهو ذو تأثيرات مضادة لنزلات البرد والبلغم والسعال.\r\n\r\n4. مطهر عام وقاتل للحشرات\r\nيحتوي اليانسون وزيت اليانسون العطري على مواد ذات خصائص مطهرة يمكن استخدامها لتطهير الجروح مما يمنع تسممها أو التهابها، كما يساعد في تسريع عملية الشفاء.\r\n\r\nوثمة فائدة أخرى مختلفة لليانسون وهي قدرته على قتل بعض أنواع الحشرات مثل القمل، وذلك بمجرد تطبيقه على فروة الرأس.\r\n\r\n5. معالجة التشنجات والتقلصات\r\nيُساعد تناول اليانسون في بعض الحالات الصحية، مثل: القولون العصبي، أو الصرع، أو السعال على التخفيف من التشنجات والتقلصات والآم العصبية المصاحبة لها، إذ إنه يساعد على استرخاء العضلات والأعصاب والأوعية الدموية المسؤولة عن هذه التشنجات.\r\n\r\n6. تسكين الألم والمساعدة على الاسترخاء\r\nوجد أن لليانسون خصائص مسكنة ومهدئة للأعصاب وتزيل التوتر والقلق وآلام العصبية، كما يحارب كل من الاكتئاب والإجهاد والغضب.\r\n\r\nكما وجد بأن تطبيق زيت اليانسون على الجبهة قد يساهم في علاج الآم الرأس والصداع.\r\n\r\n7. يعالج اضطرابات النوم\r\nبسبب دور اليانسون المهدئ والمسكن وفعاليته في المساعدة على الاسترخاء فإنه يُعد معالج لمشكلات واضطرابات النوم، ومساعد في علاج الأرق.\r\n\r\nإلا أن تناوله بجرعات كبيرة قد يؤثر سلبًا ويعمل كمادة مخدرة، بينما شربه بكمية قليلة قد يساهم في أن يكون منبه للأعصاب لذا من الأفضل الإعتدال في شربه عند قصد معالجة مشكلات اضطرابات النوم والأرق.\r\n\r\n8. يعد مفيد للأطفال\r\nإعطاء اليانسون للطفل بكميات معقولة يساعد على تهدئة تقلصات الأمعاء التي يعاني منها حديثي الولادة، ويساعد في علاج بعض المشكلات الهضمية والتنفسية، كما أنه يعمل كطارد للغازات.\r\n\r\nبالرغم من وجود فوائد لليانسون، لكن يجب الحذر عند إعطائه للأطفال لا سيما بأنه حتى الآن لا توجد دراسات تبين مدى الكمية المسموحة بشكل خاص للأطفال.\r\n\r\n9. يعالج مشكلات الدورة الشهرية\r\nبما أن لليانسون تأثير مشابه لهرمون الأستروجين في الجسم فقد يكون مفيد في علاج الآم الدورة الشهرية، والتخفيف من أعراضها ومن التقلصات والانقباضات الناتجة عنها.\r\n\r\n10. مفيد للرضاعة الطبيعية\r\nقد يوصي بعض الأطباء بتناول اليانسون كوسيلة لزيادة إدرار حليب الثدي عند المرضعات، كما أنه يساعد على الاسترخاء لدى المرضعة مما قد يعزز من عملية الرضاعة الطبيعية.\r\n\r\nاستخدامات اليانسون\r\nيتم الحصول على فوائد اليانسون عند استخدامه سواء على شكل بذور، أو أوراق، أو زيت لعلاج العديد من المشكلات الطبية، مثل:\r\n\r\nيستخدم في علاج الاضطرابات المعوية والهضمية، وطرد الغازات.\r\nيعد مفيد في علاج الإمساك.\r\nيستخدم لطرد البلغم.\r\nيستخدم لعلاج الربو.\r\nيعد جيد لإدرار للبول.\r\nتحفيز الشهية.\r\nيستخدم في علاج اضطرابات النوم والأرق.\r\nيستخدم في علاج مشكلات الحيض، وآلام الدورة الشهرية، وزيادة الرغبة الجنسية.   \r\nيعد مفيد في علاج بعض المشكلات الجلدية، مثل: الصدفية، وعلاج القمل والجرب، من خلال تطبيق زيته أو مغلي أوراقه.\r\nيدخل اليانسون في بعض الصناعات التغذوية وفي عالم الطهي لإضفاء النكهة والرائحة للطعام، كما يدخل في صناعة الحلويات، والألبان، واللحوم، وصناعة الكحوليات.\r\nيستخدم في عالم التجميل وصناعة الكريمات والصابون والعطور.\r\nالقيمة الغذائية لليانسون\r\nيعد اليانسون شحيحًا بالسعرات الحرارية وفقيرًا بالبروتينات والدهون، إلا أنه غني بالعديد من الفيتامينات والمعادن المنوعة، مثل: الفسفور، والكالسيوم، والحديد، والزنك، والمغنيسيوم، والبوتاسيوم، بالاضافة الى كل من فيتامين ج، وفيتامين أ، والقليل من حمض الفوليك', '2022-10-21');

-- --------------------------------------------------------

--
-- Table structure for table `drugs`
--

CREATE TABLE `drugs` (
  `no` int(11) NOT NULL,
  `drug_name` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `compny` varchar(50) NOT NULL,
  `info` text NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drugs`
--

INSERT INTO `drugs` (`no`, `drug_name`, `type`, `country`, `compny`, `info`, `price`) VALUES
(1, 'اسبرين', 'حبوب', 'اليمن', 'ابن زهر', '\r\nLorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur doloremque impedit laborum vitae maiores labore facilis eius nulla in repellat expedita esse eum dolor adipisci est incidunt tempore voluptatum porro, blanditiis et iusto nesciunt quis eaque ea! In quos, odio ducimus culpa similique sapiente officiis est ullam eligendi omnis vero aperiam recusandae illum quidem dolores incidunt quibusdam nemo. Sit amet vel exercitationem? Odit sint ipsam similique saepe exercitationem dolores hic sapiente nemo voluptatem, molestias inventore iste blanditiis mollitia repellat quo esse maxime. Asperiores quo accusantium molestias? Quo sapiente deleniti consequatur aliquam ea ut maxime quia aperiam commodi nihil culpa aut possimus nesciunt inventore totam sit alias, et suscipit! Sed quod obcaecati est praesentium blanditiis dolor magnam voluptas maxime provident molestiae. Eaque ab ea pariatur unde obcaecati a officiis quo quos consectetur aspernatur, vero alias quasi! Suscipit modi ipsa nihil sed ratione earum voluptates nulla facere amet ea perferendis sunt inventore, quasi libero atque animi vitae quos ad quia excepturi repellendus hic doloribus harum itaque? At suscipit ducimus laborum vitae aspernatur doloremque, dignissimos deserunt ratione delectus qui laudantium perferendis! Earum, inventore quasi! Porro, eius saepe veritatis doloribus beatae hic blanditiis inventore tempora perspiciatis voluptates quos modi officiis at facilis, numquam amet?', 2500),
(2, 'لوماك', 'حبوب', 'اليمن', 'الجابري', '\r\nLorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur doloremque impedit laborum vitae maiores labore facilis eius nulla in repellat expedita esse eum dolor adipisci est incidunt tempore voluptatum porro, blanditiis et iusto nesciunt quis eaque ea! In quos, odio ducimus culpa similique sapiente officiis est ullam eligendi omnis vero aperiam recusandae illum quidem dolores incidunt quibusdam nemo. Sit amet vel exercitationem? Odit sint ipsam similique saepe exercitationem dolores hic sapiente nemo voluptatem, molestias inventore iste blanditiis mollitia repellat quo esse maxime. Asperiores quo accusantium molestias? Quo sapiente deleniti consequatur aliquam ea ut maxime quia aperiam commodi nihil culpa aut possimus nesciunt inventore totam sit alias, et suscipit! Sed quod obcaecati est praesentium blanditiis dolor magnam voluptas maxime provident molestiae. Eaque ab ea pariatur unde obcaecati a officiis quo quos consectetur aspernatur, vero alias quasi! Suscipit modi ipsa nihil sed ratione earum voluptates nulla facere amet ea perferendis sunt inventore, quasi libero atque animi vitae quos ad quia excepturi repellendus hic doloribus harum itaque? At suscipit ducimus laborum vitae aspernatur doloremque, dignissimos deserunt ratione delectus qui laudantium perferendis! Earum, inventore quasi! Porro, eius saepe veritatis doloribus beatae hic blanditiis inventore tempora perspiciatis voluptates quos modi officiis at facilis, numquam amet?', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `loc`
--

CREATE TABLE `loc` (
  `id` int(11) NOT NULL,
  `loc_name` varchar(50) NOT NULL,
  `d_centerpoint` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loc`
--

INSERT INTO `loc` (`id`, `loc_name`, `d_centerpoint`) VALUES
(1, 'السبعين', 0),
(2, 'الصافية', 1),
(3, 'شارع تعز', 1.66),
(4, 'بيت معياد', 2.23),
(5, 'القادسية الجانوبية', 3.79),
(6, 'ش صخر', 1.32),
(7, 'ش مجاهد', 0.05),
(8, 'الرويشان', 0.871),
(9, 'ش عمان', 1.85),
(10, 'ش بغداد', 2.45),
(11, 'ش المحروقات', 2.91),
(12, 'جولة عصر', 4.09);

-- --------------------------------------------------------

--
-- Table structure for table `pharmasy`
--

CREATE TABLE `pharmasy` (
  `no` int(11) NOT NULL,
  `phrma_name` varchar(50) NOT NULL,
  `loc` varchar(50) NOT NULL,
  `tel` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pharmasy`
--

INSERT INTO `pharmasy` (`no`, `phrma_name`, `loc`, `tel`) VALUES
(1, 'الفلاحي', 'الصافية', '777777777'),
(2, 'عالم الصيدلة', 'الخمسن', '77777777');

-- --------------------------------------------------------

--
-- Table structure for table `phrma_drug`
--

CREATE TABLE `phrma_drug` (
  `id` int(11) NOT NULL,
  `p_no` int(11) NOT NULL,
  `d_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phrma_drug`
--

INSERT INTO `phrma_drug` (`id`, `p_no`, `d_no`) VALUES
(0, 1, 2),
(0, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  `garnty` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `garnty`) VALUES
(1, 'ahmed', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'ali', '202cb962ac59075b964b07152d234b70', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article_table`
--
ALTER TABLE `article_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drugs`
--
ALTER TABLE `drugs`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `loc`
--
ALTER TABLE `loc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pharmasy`
--
ALTER TABLE `pharmasy`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `phrma_drug`
--
ALTER TABLE `phrma_drug`
  ADD KEY `pFk` (`p_no`),
  ADD KEY `dFk` (`d_no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article_table`
--
ALTER TABLE `article_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `drugs`
--
ALTER TABLE `drugs`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `loc`
--
ALTER TABLE `loc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pharmasy`
--
ALTER TABLE `pharmasy`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `phrma_drug`
--
ALTER TABLE `phrma_drug`
  ADD CONSTRAINT `dFk` FOREIGN KEY (`d_no`) REFERENCES `drugs` (`no`),
  ADD CONSTRAINT `pFk` FOREIGN KEY (`p_no`) REFERENCES `pharmasy` (`no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
