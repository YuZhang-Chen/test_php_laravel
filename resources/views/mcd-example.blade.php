<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-2 sm:flex-row sm:items-end sm:justify-between">
            <div>
                <p class="text-xs font-extrabold uppercase tracking-[0.2em] text-rose-800">Example Page</p>
                <h2 class="text-2xl font-black text-stone-900" style="font-family: 'Arial Black', 'Trebuchet MS', sans-serif;">
                    {{ __('McD Example Blade') }}
                </h2>
            </div>
            <a href="{{ route('dashboard') }}" class="inline-flex w-fit items-center rounded-md border-2 border-stone-900 bg-amber-200 px-3 py-1 text-xs font-black uppercase tracking-[0.12em] text-stone-900 shadow-[2px_2px_0_0_rgba(28,25,23,0.9)]">
                {{ __('Back To Home') }}
            </a>
        </div>
    </x-slot>

    <div class="py-10 sm:py-12">
        <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
            <section class="rounded-[1.4rem] border-[6px] border-stone-900 bg-[linear-gradient(160deg,#f8e7b8_0%,#f3d590_45%,#e8bb6e_100%)] p-6 shadow-[10px_10px_0_0_rgba(28,25,23,0.85)] sm:p-8">
                <span class="inline-flex rounded-full border-2 border-stone-900 bg-lime-300 px-3 py-1 text-[11px] font-black uppercase tracking-[0.14em] text-stone-900">
                    {{ __('Internal Routing Demo') }}
                </span>

                <h1 class="mt-4 text-3xl font-black uppercase leading-tight text-stone-900 sm:text-4xl" style="font-family: 'Arial Black', 'Trebuchet MS', sans-serif; text-shadow: 2px 2px 0 #f59e0b;">
                    {{ __('You Are Now In Another Blade Page') }}
                </h1>

                <p class="mt-3 text-sm leading-relaxed text-stone-800 sm:text-base">
                    {{ __('This page proves your top button can jump to any internal blade.php page through Laravel routes.') }}
                </p>

                <div class="mt-6 grid gap-3 sm:grid-cols-2">
                    <div class="rounded-lg border-2 border-stone-900 bg-amber-50 p-4">
                        <p class="text-xs font-black uppercase tracking-[0.14em] text-rose-800">{{ __('Route Name') }}</p>
                        <p class="mt-2 font-mono text-sm text-stone-900">mcd.example</p>
                    </div>
                    <div class="rounded-lg border-2 border-stone-900 bg-amber-50 p-4">
                        <p class="text-xs font-black uppercase tracking-[0.14em] text-rose-800">{{ __('View File') }}</p>
                        <p class="mt-2 font-mono text-sm text-stone-900">resources/views/mcd-example.blade.php</p>
                    </div>
                </div>
            </section>
        </div>
    </div>
</x-app-layout>
