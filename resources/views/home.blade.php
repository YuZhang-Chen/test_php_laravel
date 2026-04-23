<x-app-layout>
	<x-slot name="header">
		<div class="flex flex-col gap-2 sm:flex-row sm:items-end sm:justify-between">
			<div>
				<p class="text-xs font-extrabold uppercase tracking-[0.22em] text-rose-800">Vintage Studio</p>
				<h2 class="text-2xl font-black leading-tight text-stone-900" style="font-family: 'Arial Black', 'Trebuchet MS', sans-serif;">
					{{ __('Aurora Retro House') }}
				</h2>
			</div>
			<span class="inline-flex w-fit rotate-1 items-center rounded-md border-2 border-stone-900 bg-amber-200 px-3 py-1 text-[11px] font-black uppercase tracking-[0.14em] text-stone-900 shadow-[2px_2px_0_0_rgba(28,25,23,0.9)]">
				{{ __('Featured 2026 Edition') }}
			</span>
		</div>
	</x-slot>

	<div class="relative overflow-hidden py-10 sm:py-12">
		<div class="pointer-events-none absolute -left-20 top-6 h-44 w-44 rotate-12 rounded-full border-4 border-rose-900/30"></div>
		<div class="pointer-events-none absolute -right-20 bottom-10 h-52 w-52 -rotate-12 rounded-full border-4 border-emerald-900/25"></div>

		<div class="relative mx-auto flex max-w-7xl flex-col gap-6 px-4 sm:gap-8 sm:px-6 lg:px-8">
			<section class="flex justify-center">
				<div class="w-full max-w-3xl rounded-2xl border-4 border-stone-900 bg-[linear-gradient(160deg,#f8e7b8_0%,#f3d590_45%,#e8bb6e_100%)] p-3 shadow-[8px_8px_0_0_rgba(28,25,23,0.85)] sm:p-4">
					<a href="{{ route('mcd.example') }}"
					   class="group flex w-full items-center justify-center rounded-xl border-[3px] border-rose-900 bg-rose-700 px-4 py-4 text-center text-sm font-black uppercase tracking-[0.12em] text-amber-50 shadow-[5px_5px_0_0_rgba(127,29,29,0.9)] transition hover:-translate-y-0.5 hover:bg-rose-800 sm:px-10 sm:py-5 sm:text-xl sm:tracking-[0.15em]">
						<span class="mr-2 text-xl sm:mr-3 sm:text-2xl">🍟</span>
						<span class="leading-snug">{{ __('Visit McDonalds Taiwan') }}</span>
						<span class="ml-2 text-xl transition group-hover:translate-x-1 sm:ml-3 sm:text-2xl">➜</span>
					</a>
				</div>
			</section>

			<section class="grid gap-6 lg:grid-cols-12">
				<article class="relative overflow-hidden rounded-[1.6rem] border-[6px] border-stone-900 bg-[linear-gradient(160deg,#f8e7b8_0%,#f3d590_45%,#e8bb6e_100%)] p-5 shadow-[12px_12px_0_0_rgba(28,25,23,0.85)] lg:col-span-8 sm:p-8">
					<span class="absolute -right-2 top-3 rotate-6 rounded-full border-2 border-stone-900 bg-lime-300 px-3 py-1 text-[10px] font-black uppercase tracking-[0.16em] text-stone-900">
						{{ __('HOT PROJECTS') }}
					</span>

					<p class="text-xs font-black uppercase tracking-[0.2em] text-rose-800">{{ __('Brand. Story. Performance.') }}</p>
					<h1 class="mt-3 text-3xl font-black uppercase leading-[1.04] text-stone-900 sm:text-5xl" style="font-family: 'Arial Black', 'Trebuchet MS', sans-serif; text-shadow: 2px 2px 0 #f59e0b;">
						{{ __('Build A Website People Actually Remember') }}
					</h1>
					<p class="mt-4 max-w-3xl text-sm leading-relaxed text-stone-800 sm:text-base">
						{{ __('We craft personality-first websites with cinematic layouts, clear call-to-actions, and conversion-ready content flow. Bold visuals outside, clean business logic inside.') }}
					</p>

					<div class="mt-6 flex flex-wrap gap-3">
						<a href="#contact" class="inline-flex items-center rounded-lg border-[3px] border-stone-900 bg-stone-900 px-5 py-3 text-sm font-black uppercase tracking-[0.14em] text-amber-50 shadow-[4px_4px_0_0_rgba(28,25,23,0.9)] transition hover:bg-stone-800">
							{{ __('Start My Brand Site') }}
						</a>
						<a href="#work" class="inline-flex items-center rounded-lg border-[3px] border-stone-900 bg-amber-100 px-5 py-3 text-sm font-black uppercase tracking-[0.14em] text-stone-900 shadow-[4px_4px_0_0_rgba(28,25,23,0.9)] transition hover:bg-amber-200">
							{{ __('See Showcase') }}
						</a>
					</div>

					<div class="mt-6 grid grid-cols-1 gap-3 sm:grid-cols-3">
						<div class="rounded-lg border-2 border-stone-900 bg-amber-50 p-3 text-center">
							<p class="text-2xl font-black text-stone-900">150+</p>
							<p class="text-[11px] font-bold uppercase tracking-[0.12em] text-stone-700">{{ __('Launches') }}</p>
						</div>
						<div class="rounded-lg border-2 border-stone-900 bg-amber-50 p-3 text-center">
							<p class="text-2xl font-black text-stone-900">4.9</p>
							<p class="text-[11px] font-bold uppercase tracking-[0.12em] text-stone-700">{{ __('Rating') }}</p>
						</div>
						<div class="rounded-lg border-2 border-stone-900 bg-amber-50 p-3 text-center">
							<p class="text-2xl font-black text-stone-900">42%</p>
							<p class="text-[11px] font-bold uppercase tracking-[0.12em] text-stone-700">{{ __('Growth Avg') }}</p>
						</div>
					</div>
				</article>

				<aside class="space-y-4 lg:col-span-4">
					<div class="rounded-xl border-4 border-stone-900 bg-[#fff6df] p-5 shadow-[6px_6px_0_0_rgba(28,25,23,0.85)]">
						<p class="text-xs font-black uppercase tracking-[0.18em] text-rose-800">{{ __('Experience Board') }}</p>
						<h3 class="mt-2 text-2xl font-black text-stone-900" style="font-family: Georgia, 'Times New Roman', serif;">{{ __('Retro, But Premium') }}</h3>
						<ul class="mt-3 space-y-2 text-sm text-stone-700">
							<li class="flex gap-2"><span class="mt-1 h-2 w-2 rounded-full bg-rose-700"></span><span>{{ __('Signature visual identity') }}</span></li>
							<li class="flex gap-2"><span class="mt-1 h-2 w-2 rounded-full bg-rose-700"></span><span>{{ __('Story-driven section architecture') }}</span></li>
							<li class="flex gap-2"><span class="mt-1 h-2 w-2 rounded-full bg-rose-700"></span><span>{{ __('Mobile-first responsive polish') }}</span></li>
						</ul>
					</div>
					<div class="rounded-xl border-4 border-stone-900 bg-rose-700 p-5 text-amber-50 shadow-[6px_6px_0_0_rgba(28,25,23,0.85)]">
						<p class="text-xs font-black uppercase tracking-[0.16em]">{{ __('Fast Offer') }}</p>
						<p class="mt-2 text-sm leading-relaxed">{{ __('Book this week and get a free homepage conversion audit report.') }}</p>
						<a href="#contact" class="mt-4 inline-flex w-full justify-center rounded-md border-2 border-amber-100 bg-amber-200 px-4 py-2 text-xs font-black uppercase tracking-[0.12em] text-rose-900 sm:w-auto">
							{{ __('Claim Now') }}
						</a>
					</div>
				</aside>
			</section>

			<section class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
				<article class="rounded-xl border-4 border-stone-900 bg-[#fff8e8] p-4 shadow-[4px_4px_0_0_rgba(28,25,23,0.85)]">
					<p class="text-xs font-black uppercase tracking-[0.16em] text-rose-800">{{ __('01') }}</p>
					<h3 class="mt-2 text-lg font-black text-stone-900">{{ __('Discovery') }}</h3>
					<p class="mt-1 text-sm text-stone-700">{{ __('Find your unique position and core message.') }}</p>
				</article>
				<article class="rounded-xl border-4 border-stone-900 bg-[#fff8e8] p-4 shadow-[4px_4px_0_0_rgba(28,25,23,0.85)]">
					<p class="text-xs font-black uppercase tracking-[0.16em] text-rose-800">{{ __('02') }}</p>
					<h3 class="mt-2 text-lg font-black text-stone-900">{{ __('Design') }}</h3>
					<p class="mt-1 text-sm text-stone-700">{{ __('Build a bold visual system with clear hierarchy.') }}</p>
				</article>
				<article class="rounded-xl border-4 border-stone-900 bg-[#fff8e8] p-4 shadow-[4px_4px_0_0_rgba(28,25,23,0.85)]">
					<p class="text-xs font-black uppercase tracking-[0.16em] text-rose-800">{{ __('03') }}</p>
					<h3 class="mt-2 text-lg font-black text-stone-900">{{ __('Develop') }}</h3>
					<p class="mt-1 text-sm text-stone-700">{{ __('Implement fast, stable, and responsive frontend.') }}</p>
				</article>
				<article class="rounded-xl border-4 border-stone-900 bg-[#fff8e8] p-4 shadow-[4px_4px_0_0_rgba(28,25,23,0.85)]">
					<p class="text-xs font-black uppercase tracking-[0.16em] text-rose-800">{{ __('04') }}</p>
					<h3 class="mt-2 text-lg font-black text-stone-900">{{ __('Optimize') }}</h3>
					<p class="mt-1 text-sm text-stone-700">{{ __('Tune conversion, SEO, and user engagement loops.') }}</p>
				</article>
			</section>

			<section id="work" class="rounded-2xl border-[6px] border-stone-900 bg-[linear-gradient(160deg,#f8e7b8_0%,#f3d590_45%,#e8bb6e_100%)] p-5 shadow-[10px_10px_0_0_rgba(28,25,23,0.85)] sm:p-7">
				<div class="flex flex-wrap items-center justify-between gap-3">
					<div>
						<p class="text-xs font-black uppercase tracking-[0.18em] text-rose-800">{{ __('Showcase') }}</p>
						<h2 class="mt-1 text-3xl font-black text-stone-900" style="font-family: Georgia, 'Times New Roman', serif;">{{ __('Recent Brand Works') }}</h2>
					</div>
					<span class="rounded-md border-2 border-stone-900 bg-lime-300 px-3 py-1 text-[10px] font-black uppercase tracking-[0.14em] text-stone-900 animate-pulse">
						{{ __('NEW UPDATES') }}
					</span>
				</div>

				<div class="mt-5 grid gap-4 md:grid-cols-3">
					<article class="overflow-hidden rounded-xl border-4 border-stone-900 bg-[#fff8e8]">
						<div class="h-36 bg-[linear-gradient(120deg,#be123c_0%,#f59e0b_100%)]"></div>
						<div class="p-4">
							<h3 class="text-lg font-black text-stone-900">{{ __('Northern Atelier') }}</h3>
							<p class="mt-1 text-sm text-stone-700">{{ __('Luxury storytelling and stronger checkout intent.') }}</p>
						</div>
					</article>
					<article class="overflow-hidden rounded-xl border-4 border-stone-900 bg-[#fff8e8]">
						<div class="h-36 bg-[linear-gradient(120deg,#0369a1_0%,#22d3ee_100%)]"></div>
						<div class="p-4">
							<h3 class="text-lg font-black text-stone-900">{{ __('FlowPilot Cloud') }}</h3>
							<p class="mt-1 text-sm text-stone-700">{{ __('SaaS launch revamp with cleaner conversion path.') }}</p>
						</div>
					</article>
					<article class="overflow-hidden rounded-xl border-4 border-stone-900 bg-[#fff8e8]">
						<div class="h-36 bg-[linear-gradient(120deg,#166534_0%,#84cc16_100%)]"></div>
						<div class="p-4">
							<h3 class="text-lg font-black text-stone-900">{{ __('Astra Advisory') }}</h3>
							<p class="mt-1 text-sm text-stone-700">{{ __('Trust-first redesign for B2B decision makers.') }}</p>
						</div>
					</article>
				</div>
			</section>

			<section id="contact" class="rounded-xl border-4 border-stone-900 bg-[#fff6df] p-6 shadow-[6px_6px_0_0_rgba(28,25,23,0.85)] sm:p-7">
				<p class="text-xs font-black uppercase tracking-[0.18em] text-rose-800">{{ __('Contact') }}</p>
				<h2 class="mt-2 text-3xl font-black text-stone-900" style="font-family: Georgia, 'Times New Roman', serif;">{{ __('Lets Build Your Signature Homepage') }}</h2>
				<p class="mt-3 max-w-3xl text-sm leading-relaxed text-stone-700 sm:text-base">
					{{ __('Share your business goals and timeline. We will craft a clear plan with visual direction, section strategy, and measurable launch targets.') }}
				</p>
				<div class="mt-5 flex flex-wrap gap-3">
					<a href="mailto:hello@auroracraft.dev" class="inline-flex rounded-lg border-[3px] border-stone-900 bg-rose-700 px-5 py-3 text-sm font-black uppercase tracking-[0.12em] text-amber-50 shadow-[4px_4px_0_0_rgba(28,25,23,0.9)] hover:bg-rose-800">
						{{ __('Book A Consultation') }}
					</a>
					<a href="#" class="inline-flex rounded-lg border-[3px] border-stone-900 bg-amber-100 px-5 py-3 text-sm font-black uppercase tracking-[0.12em] text-stone-900 shadow-[4px_4px_0_0_rgba(28,25,23,0.9)] hover:bg-amber-200">
						{{ __('Download Portfolio Deck') }}
					</a>
				</div>
			</section>
		</div>
	</div>
</x-app-layout>
