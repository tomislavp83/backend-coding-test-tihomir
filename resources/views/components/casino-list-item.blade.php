<!-- resources/views/components/casino-list-item.blade.php -->
<tr class="border-b border-gray-200 hover:bg-gray-100">
    <td class="py-3 px-6">
        <span class="font-medium">{{ $casino->id }}</span>
    </td>
    <td class="py-3 px-6">
        <span class="font-medium">{{ $casino->name }}</span>
    </td>
    <td class="py-3 px-6">
        <span class="font-medium">{{ count($casino->faqs) }}</span>
    </td>
    <td class="py-3 px-6 text-right">
        <a href="{{  route('casinos.edit', ['casino' => $casino->id]) }}" class="ml-auto transform hover:text-white bg-blue-200 text-blue-600 hover:bg-blue-600 transition-colors duration-500 rounded-full inline-flex px-3 py-2 cursor-pointer items-center">
            <span class="text-xs font-bold">edit</span>
        </a>
    </td>
</tr>
