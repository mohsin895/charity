<li>
    <a
        {{ $attributes->merge(['class' => 'flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-white rounded-lg hover:bg-slate-500  dark:bg-neutral-800 dark:text-neutral-400 dark:hover:text-neutral-300']) }}>
        {{ $slot }}
    </a>
</li>
