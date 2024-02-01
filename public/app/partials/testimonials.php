<?php
$i = 4;
$testimonials = [
	[
		'text' => "Reid Software was pivotal in ushering transformative digital change for our business. Their services brought about significant advancements for us and I can't recommend them enough.",
		'author' => "Aaron McAvoy<br>Owner, Athens Medical Massage<br>Athens, OH"
	],
	[
		'text' => "Absolutely love the flexible nature of DRCO! We've been able to adjust it precisely to meet our varied student needs. Plus, the user-friendly design is a real win for us - it's as beneficial to us as it is for our students. Brilliant product all around!",
		'author' => "Sarah J.<br>4th Grade Teacher, DRCO User<br>Columbus, OH"
	],
	[
		'text' => "I absolutely LOVE the new GreatAuPair app! The improved design simplifies the job matching process remarkably. The smooth workflows and intuitive design make it genuinely effortless to navigate.",
		'author' => "Francesca B.<br>Nanny, GreatAuPair User<br>Denver, CO"
	],
	[
		'text' => "The proficiency and creativity of Reid Software completely accelerated our digital transformation journey. Their beneficial services make them a top recommendation for any business seeking to navigate their digital transformation effectively.",
		'author' => "Jesse Yun<br>CEO, ecoShuttle Charters and Tours<br>Portland, OR"
	],
	[
		'text' => "Working with Reid Software has become a true partnership. Their commitment results in rapid task turnarounds and consistent quality in product design and development. Their leadership team takes personal ownership of our project, proactively introducing innovative ideas, and always remains receptive to feedback.",
		'author' => "Dr. Julie S. Owens<br>Co-Founder, Center for Intervention Reasearch in Schools<br>Ohio University"
	],
	[
		'text' => "Reid Software's outstanding contributions to the team and project extend far beyond just software development. Their team regularly participates in brainstorming, project architecture, operations planning and helping us better understand our users.",
		'author' => "Dr. Steven W. Evans<br>Co-Founder, Center for Intervention Reasearch in Schools<br>Ohio University"
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