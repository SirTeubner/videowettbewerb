<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 hover:-mx-1 bg-brandpurple border border-transparent rounded-3xl font-semibold hover:text-[0.80rem] hover:font-bold text-xs text-black uppercase tracking-widest focus:bg-gray-700 focus:outline-none  transition ease-in-out duration-300']) }}>
    {{ $slot }}
</button>
