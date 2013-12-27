-- phpMyAdmin SQL Dump
-- version 4.0.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 26, 2013 at 11:01 PM
-- Server version: 5.1.72-cll
-- PHP Version: 5.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `johnbusc_p4_johnbusche_com`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `title` text NOT NULL,
  PRIMARY KEY (`post_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `created`, `modified`, `user_id`, `content`, `title`) VALUES
(8, 1388083004, 1388083004, 1, 'Daily jabs of insulin are a painful reality for many with diabetes. That may change if researchers who have successfully tested oral insulin in rats are able to replicate those results in humans.\r\n\r\nNearly 350 million people worldwide suffer from diabetes, and that number is predicted to grow to more than 500 million by 2030. While the more common form, type-2 diabetes, does not always need insulin treatment, nearly a quarter of all diabetes patients depend on insulin injections. Estimated annual sales of oral insulin could be as high as $17 billion.\r\n\r\nThe benefits of an insulin pill include more than just ease of taking the drug. A pill would mean patients can start taking insulin earlier in the disease''s development, which could reduce some of diabetes'' secondary complications like blindness and the impaired healing that leads to amputations.\r\n\r\nThe idea of oral insulin has been around since the 1930s, but the difficulties of making it have previously seemed too large to overcome. First, insulin is a protein—when it comes in contact with stomach enzymes, it is quickly destroyed. Second, if insulin can pass through the stomach safely, it is too big a molecule (about 30 times the size of aspirin) to be absorbed into the bloodstream, where it needs to be in order to regulate blood-sugar levels.\r\n\r\nIn spite of the difficulties, Sanyog Jain at India’s National Institute of Pharmaceutical Education and Research and his colleagues have been working on delivering insulin in the oral form for many years. Their first fully successful attempt came in 2012, when they developed a formulation that successfully controlled blood-sugar levels in rats. But the materials used were too expensive to consider commercializing the technology.\r\n\r\nNow, in a paper published in the journal Biomacromolecules, they have found a cheaper and more reliable way of delivering insulin. They overcome the two main hurdles by first packing insulin into tiny sacs made of lipids (fats) and then attaching to it folic acid (vitamin B9) to help improve its absorption into the bloodstream.\r\n\r\nThe lipids they use are cheap and have, in the past, been successfully employed to deliver other drugs. They help to protect insulin from being digested by stomach enzymes, which gets it to the small intestine. When the lipid-covered sacs enter the small intestine, special cells on its lining, called microfold cells, are attracted to the folic acid. The folic acid helps activate a transport mechanism that can let big molecules pass through into the blood. The amount of folic acid used in the formulation also appears to be in the safe region.\r\n\r\nIn rats, Jain’s formulation was as effective as injected insulin, although the relative amounts that entered the blood stream differed. However, it exceeded injected insulin in one key aspect: whereas the effects of an injection subside in 6 to 8 hours, Jain’s formulation helped control blood-sugar levels for more than 18 hours.\r\n\r\nThe most important part of the research comes after successful testing in animals—the formulation needs to be given to human volunteers. But, Jain said, “at a government institute like ours, we don’t have the sort of money needed for clinical trials.”\r\n\r\nHe may not have to wait for long, as big pharma companies have been searching for an insulin pill formulation for decades. Two of them, Danish pharma giant Novo Nordisk and Israeli upstart Oramed are in a race to come up with a solution. Google’s venture capital arm, Google Ventures, recently invested $10m in Rani Therapeutics with the hope it will help develop an oral insulin product. Indian firm Biocon also does oral insulin research, and it recently signed an agreement with pharma giant Bristol-Myers Squibb.\r\n\r\nOramed is ahead of Novo Nordisk, with its oral insulin product soon to enter phase-II clinical trials, which is the most advanced stage any oral insulin formulation has ever reached. Oramed chief scientist Miriam Kidron said of Jain’s research: “Most people have the same basic idea to develop an insulin pill, but it''s the little differences that will determine ultimate success.”\r\n\r\nWhile Kidron did not reveal Oramed’s formulation, she said, “we attempted liposomal delivery before, just like Jain’s work, but we weren’t successful.” She warned that translating success from rats to humans is very difficult. And she is right—most drugs have a high cull-rate at each stage of their development. Even so, research like Jain’s gives hope that an insulin pill may not remain a dream for long.The Conversation\r\n\r\nBiomacromolecules, 2013. DOI: 10.1021/bm401580k (About DOIs).', 'Insulin pill may soon be a reality for diabetes treatment'),
(9, 1388107637, 1388107637, 1, 'Leaks of internal National Security Agency documents began to dominate the headlines in June, and the conversation around surveillance has changed dramatically. The surveillance techniques have been denounced as "almost Orwellian" by a federal judge, and Congress is debating whether mass surveillance should be stopped entirely.\r\n\r\nEdward Snowden, the former NSA contractor who pushed the spy agency into the global spotlight, has stayed mostly quiet in recent months. But he broke that silence recently, sitting down for two days of interviews with one of the trio of journalists he gave the documents to, Barton Gellman.\r\n\r\nThe headline splashed on the front page of The Washington Post on Christmas Eve was no holiday gift for the intelligence community. "Edward Snowden: I already won," read the headline, atop one of several new pictures of the leaker.\r\n\r\nHis goal, he told Gellman, was not necessarily to ban bulk surveillance, but to give the public a chance to weigh in. And that has happened, no matter what the outcome.\r\n\r\n"All I wanted was for the public to be able to have a say in how they are governed,” he said. “That is a milestone we left a long time ago. Right now, all we are looking at are stretch goals."\r\n\r\n"For me, in terms of personal satisfaction, the mission’s already accomplished," he said. "I already won. As soon as the journalists were able to work, everything that I had been trying to do was validated. Because, remember, I didn’t want to change society. I wanted to give society a chance to determine if it should change itself."\r\n\r\nLead-up to a leak\r\n\r\nSnowden made the decision to leak after his colleagues in the intelligence agency continued to ignore his concerns about the public''s forced blindness. The intelligence agencies and their supposed overseers had become a "graveyard of judgment," he said.\r\n\r\nTo critics who say he could have raised his concerns through more conventional channels, he says he did so.\r\n\r\n"I asked these people, ‘What do you think the public would do if this was on the front page?’? How is that not reporting it? How is that not raising it?"\r\n\r\nAs to the suggestion that he is disloyal, he is dismissive.\r\n\r\n"There is no evidence at all for the claim that I have loyalties to Russia or China or any country other than the United States,” said Snowden. “I have no relationship with the Russian government. I have not entered into any agreements with them... If I defected at all, I defected from the government to the public."\r\n\r\nUS intelligence officials have expressed concern that the files could have been copied by foreign governments. There''s no way that happened, Snowden said.\r\n\r\n“There’s nothing on it,” Snowden said, turning his laptop screen to Gellman at one point. “My hard drive is completely blank.”\r\n\r\nSnowden demurred when asked about his personal life, but he did offer a glimpse, describing himself as something of an "ascetic" and an "indoor cat." \r\n\r\n"It has always been really difficult to get me to leave the house,” he said. “I just don’t have a lot of needs... Occasionally there’s things to go do, things to go see, people to meet, tasks to accomplish. But it’s really got to be goal-oriented, you know. Otherwise, as long as I can sit down and think and write and talk to somebody, that’s more meaningful to me than going out and looking at landmarks.”\r\n\r\nNo one accompanied Snowden to the interviews, and Gellman, the reporter, saw no one nearby, although he noted that "it would be odd if Russian authorities did not keep an eye on him." Snowden has had continuous Internet access, and he speaks daily with the lawyers and journalists who are close to him.\r\n\r\n"Alternative Christmas message" for the UK\r\n\r\nThe day after the Post interview was published, Britain''s Channel 4 broadcast an "alternative Christmas message" from Snowden; he struck a more activist tone, saying that the people of the UK and the US should work to "end mass surveillance."\r\n\r\nEarlier this month, US District Judge Richard Leon had called the NSA bulk data program "almost Orwellian," but Snowden noted that technology today allows governments to go even further. He said:\r\n\r\nThe types of collection in [Orwell''s] book—microphones and video cameras, TVs that watch us—are nothing compared to what we have available today. We have sensors in our pockets that track us everywhere we go. Think about what this means for the privacy of the average person...\r\n\r\nA child born today will grow up with no conception of privacy at all. They’ll never know what it means to have a private moment to themselves, an unrecorded, unanalyzed thought. And that’s a problem because privacy matters, privacy is what allows us to determine who we are and who we want to be.', 'Snowden speaks from Moscow: “The mission’s already accomplished”');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_login` int(11) NOT NULL,
  `timezone` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `created`, `modified`, `token`, `password`, `last_login`, `timezone`, `first_name`, `last_name`, `email`) VALUES
(1, 1387940970, 1387940970, 'd4478ee5e9c4ea080d375bc413513336841f6e58', '96f0afacca4afc41cdd6962dbfede141b9e1f773', 0, '', 'John', 'Busche', 'jcbusche@gmail.com'),
(2, 1388100583, 1388100583, '09c994009074f1d29bc5ddc724de8eb1c7431bfa', '96f0afacca4afc41cdd6962dbfede141b9e1f773', 0, '', 'John', 'Bus', 'jcb1226@gmail.com');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
