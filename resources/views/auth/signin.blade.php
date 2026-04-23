<x-guest-layout>
    <div class="relative w-full overflow-hidden rounded-[1.6rem] border-[6px] border-stone-900 bg-[linear-gradient(160deg,#f8e7b8_0%,#f3d590_45%,#e8bb6e_100%)] p-6 shadow-[12px_12px_0_0_rgba(28,25,23,0.85)] sm:p-8">
        <div class="pointer-events-none absolute -left-10 -top-10 h-36 w-36 rotate-12 rounded-full border-4 border-rose-900/35"></div>
        <div class="pointer-events-none absolute -right-16 bottom-10 h-40 w-40 -rotate-12 rounded-full border-4 border-emerald-900/30"></div>

        <div class="relative mb-6 rounded-xl border-4 border-stone-900 bg-[#fdf2d2] p-4 shadow-[4px_4px_0_0_rgba(28,25,23,0.85)]">
            <span class="absolute -right-3 -top-4 rotate-6 rounded-full border-2 border-stone-900 bg-rose-700 px-3 py-1 text-[11px] font-extrabold tracking-[0.12em] text-rose-50">
                {{ __('EST. 1986') }}
            </span>

            <h1 class="text-center text-3xl font-black uppercase leading-none tracking-[0.18em] text-stone-900" style="font-family: 'Arial Black', 'Trebuchet MS', sans-serif; text-shadow: 2px 2px 0 #f59e0b;">
                {{ __('Sign In') }}
            </h1>
            <p class="mt-2 text-center text-xs font-bold uppercase tracking-[0.2em] text-stone-700">
                {{ __('Retro Club Entrance') }}
            </p>
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4 rounded-lg border-2 border-stone-900 bg-lime-100 px-3 py-2 font-semibold text-stone-900" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}" class="relative space-y-4 rounded-xl border-4 border-stone-900 bg-[#fff6df] p-4 shadow-[5px_5px_0_0_rgba(28,25,23,0.85)] sm:p-5">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" class="text-xs font-extrabold uppercase tracking-[0.2em] text-stone-900" :value="__('Email')" />
                <x-text-input id="email" class="mt-1 block w-full rounded-md border-[3px] border-stone-900 bg-[#fff8e8] text-stone-900 placeholder:text-stone-500 focus:border-rose-700 focus:ring-rose-700" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-rose-800" />
            </div>

            <!-- Password -->
            <div>
                <x-input-label for="password" class="text-xs font-extrabold uppercase tracking-[0.2em] text-stone-900" :value="__('Password')" />
                <x-text-input id="password" class="mt-1 block w-full rounded-md border-[3px] border-stone-900 bg-[#fff8e8] text-stone-900 placeholder:text-stone-500 focus:border-rose-700 focus:ring-rose-700"
                              type="password"
                              name="password"
                              required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-rose-800" />
            </div>

            <!-- Remember Me -->
            <div class="flex items-center justify-between border-y-2 border-dashed border-stone-900/70 py-3">
                <label for="remember_me" class="inline-flex items-center text-stone-900">
                    <input id="remember_me" type="checkbox" class="rounded border-2 border-stone-900 bg-amber-50 text-rose-700 shadow-sm focus:ring-rose-700" name="remember">
                    <span class="ms-2 text-sm font-bold uppercase tracking-[0.08em]">{{ __('Remember me') }}</span>
                </label>
                <span class="rounded-md border-2 border-stone-900 bg-amber-200 px-2 py-1 text-[10px] font-black uppercase tracking-[0.12em] text-stone-900">
                    {{ __('Members Only') }}
                </span>
            </div>

            <div class="flex flex-col-reverse items-stretch gap-3 pt-2 sm:flex-row sm:items-center sm:justify-between">
                @if (Route::has('password.request'))
                    <a class="text-center text-xs font-extrabold uppercase tracking-[0.14em] text-stone-800 underline decoration-rose-700 decoration-2 underline-offset-4 transition hover:text-rose-800 focus:outline-none focus:ring-2 focus:ring-rose-700 focus:ring-offset-2 focus:ring-offset-amber-100 sm:text-left" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-primary-button class="justify-center border-[3px] border-stone-900 bg-rose-700 px-6 py-2 text-sm font-black uppercase tracking-[0.16em] text-amber-50 shadow-[4px_4px_0_0_rgba(28,25,23,0.9)] transition hover:bg-rose-800 focus:ring-rose-700 active:translate-y-[1px] active:shadow-[2px_2px_0_0_rgba(28,25,23,0.9)]">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
