<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-[#f2cd01] dark:bg-[#f2cd01] border border-transparent rounded-md font-bold text-xs text-black dark:text-black uppercase tracking-widest hover:bg-[#f6d939] dark:hover:bg-[#f6d939] focus:bg-[#f6d939] dark:focus:bg-[#f6d939] active:bg-[#f6d939] dark:active:bg-[#f6d939] focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
