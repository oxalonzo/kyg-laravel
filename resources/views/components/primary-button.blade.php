<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-yellow-300 dark:bg-yellow-300 border border-transparent rounded-md font-bold text-xs text-black dark:text-black uppercase tracking-widest hover:bg-yellow-400 dark:hover:bg-yellow-400 focus:bg-yellow-400 dark:focus:bg-yellow-400 active:bg-yellow-400 dark:active:bg-yellow-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
