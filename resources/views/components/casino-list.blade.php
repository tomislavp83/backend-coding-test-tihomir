<!-- resources/views/components/casino-list.blade.php -->
<div class="w-full">
    <div class="bg-white shadow-md rounded my-6">
        <table class="min-w-max w-full table-auto">
            <thead>
            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                <th class="py-3 px-6 text-left">Id</th>
                <th class="py-3 px-6 text-left">Name</th>
                <th class="py-3 px-6 text-left">No. of faqs</th>
                <th class="py-3 px-6 text-right">action</th>
            </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
            @foreach($casinos as $casino)
                <x-casino-list-item :casino="$casino"/>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
