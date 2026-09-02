@extends('layouts.base')

@section('title', 'Not Found - Silveredgebank')

@section('content')
<div class="min-h-screen flex items-center justify-center p-4">
		<div class="w-full max-w-md mx-auto">

			<!-- Error Card -->
			<div class="error-card rounded-xl p-8 md:p-10 space-y-6 text-center">

				<!-- Error Code -->
				<div>
					<span class="text-7xl md:text-8xl font-bold text-primary-500 tracking-tight">
						404					</span>
				</div>

				<!-- Divider -->
				<div class="flex justify-center">
					<div class="w-16 h-1 rounded-full bg-primary-500"></div>
				</div>

				<!-- Message -->
				<div class="space-y-2">
					<h2 class="text-xl font-semibold text-[#0D1B23]">Not Found</h2>
					<p class="text-[#7A7A7A] text-sm leading-relaxed">We could not find the page you were looking for.</p>
				</div>

				<!-- Action Button -->
				<div class="pt-2">
					<a href="http://www.silveredgeb.com/"
					   class="error-button inline-flex items-center justify-center space-x-2 px-6 py-3 rounded-xl font-semibold text-white text-sm group">
						<i data-lucide="arrow-left" class="w-4 h-4 group-hover:-translate-x-1 transition-transform"></i>
						<span>Go Back</span>
					</a>
				</div>

				<!-- Home Link -->
				<p class="text-xs text-[#7A7A7A]">
					or <a href="https://www.silveredgeb.com" class="text-primary-500 hover:text-primary-600 font-medium transition-colors">return to homepage</a>
				</p>
			</div>

			<!-- Footer -->
			<p class="text-xs text-[#7A7A7A] text-center mt-6">
				&copy; 2026 Silveredgebank. All rights reserved.
			</p>

		</div>
	</div>

	<!-- Initialize Lucide Icons -->
	<script>
		document.addEventListener('DOMContentLoaded', () => {
			if (typeof lucide !== 'undefined') {
				lucide.createIcons();
			}
		});
	</script>
@endsection
