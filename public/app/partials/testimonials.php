<?php
//$i = 4;
$testimonials = [
	[
		'text' => "Reid Software was pivotal in ushering transformative digital change for our business. Their services brought about significant advancements for us and I can't recommend them enough.",
		'author' => "Aaron McAvoy<br>Owner, Athens Medical Massage<br>Athens, OH"
	],
	[
		'text' => "Absolutely love the flexible nature of DRCO! We've been able to adjust it precisely to meet our varied student needs. It's as beneficial to us as it is for our students.",
		'author' => "Sarah J.<br>4th Grade Teacher, DRCO User<br>Columbus, OH"
	],
	[
		'text' => "I've been using the new GreatAuPair app, and it's been a fantastic experience. The updated design has made finding job matches so much easier. Everything feels organized, and the app is really easy to navigate. It's definitely improved how I use it to find opportunities.",
		'author' => "Francesca B.<br>Nanny, GreatAuPair User<br>Denver, CO"
	],
	[
		'text' => "The proficiency and creativity of Reid Software completely accelerated our digital transformation journey. Their beneficial services make them a top recommendation for any business seeking to navigate their digital transformation effectively.",
		'author' => "Jesse Yun<br>CEO, ecoShuttle Charters and Tours<br>Portland, OR"
	],
	[
		'text' => "Working with Reid Software has become a true partnership. Their leadership team takes personal ownership of our project, proactively introducing innovative ideas, and always remains receptive to feedback. Their commitment results in rapid turnarounds and consistent quality in product design and development.",
		'author' => "Dr. Julie S. Owens<br>Co-Founder, Center for Intervention Reasearch in Schools<br>Ohio University"
	],
	[
		'text' => "Reid's outstanding contributions to the team and project extend far beyond just software development. His team regularly participates in brainstorming, project architecture, operations planning and helping us better understand our users.",
		'author' => "Dr. Steven W. Evans<br>Co-Founder, Center for Intervention Reasearch in Schools<br>Ohio University"
	],
	[
		'text' => "Throughout our five-year collaboration, Jacob Reid has consistently delivered exceptional value. Beyond his technical acumen in software development, he makes impactful contributions to team discussions, helping us brainstorm innovative solutions. His growing familiarity with our project goals and audience has allowed him to enhance the system's design, ensuring it is both engaging and user-friendly for educators addressing student emotional and behavioral challenges.",
		'author' => "Dr. Steven W. Evans<br>Co-Founder, Center for Intervention Reasearch in Schools<br>Ohio University"
	],
	[
		'text' => "Working with Jacob Reid has been an invaluable experience for our team. He has been instrumental in helping us solve complex challenges and providing innovative solutions that enhance both our operations and user interactions. His ability to empower our team through clear guidance and his proactive approach to collaboration have been key to our success.",
		'author' => "Dr. Steven W. Evans<br>Co-Founder, Center for Intervention Reasearch in Schools<br>Ohio University"
	],
	[
		'text' => "Jacob Reid has consistently delivered high-quality services, marked by his dedication to frequent communication and active engagement. His approach ensures that the ideas and expertise of all stakeholders are seamlessly integrated into our product, strengthening our partnership and driving its continuous evolution.",
		'author' => "Dr. Julie S. Owens<br>Co-Founder, Center for Intervention Reasearch in Schools<br>Ohio University"
	],
	[
		'text' => "Collaborating with Jacob Reid has been a remarkably rewarding experience. Jacob consistently brings fresh ideas to the table and remains receptive to our feedback, which has significantly enhanced the quality of our collaboration and product.",
		'author' => "Dr. Julie S. Owens<br>Co-Founder, Center for Intervention Reasearch in Schools<br>Ohio University"
	]
];

?>

<div id="single-testimonial" class="section gray-bg">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12">
				<div class="testimonial-card">
					<img src="/assets/img/quote-icon.svg" />
					<p><?php echo $testimonials[$i]['text'] ?></p>
					<div class="author">
						<p><?php echo $testimonials[$i]['author'] ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
