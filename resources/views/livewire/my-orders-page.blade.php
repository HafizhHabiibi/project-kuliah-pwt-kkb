<div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
  <h1 class="text-4xl font-bold text-slate-500">Orderanku</h1>
  <div class="flex flex-col bg-white p-5 rounded mt-4 shadow-lg">
    <div class="-m-1.5 overflow-x-auto">
      <div class="p-1.5 min-w-full inline-block align-middle">
        <div class="overflow-hidden">
          <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
            <thead>
              <tr>
                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">No Order</th>
                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Tanggal</th>
                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Status Order</th>
                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Status Pembayaran</th>
                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Total Bayar</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($orders as $order)
              <tr class="odd:bg-white even:bg-gray-100 dark:odd:bg-slate-900 dark:even:bg-slate-800" wire:key='{{ $order->id }}'>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">{{ $order->id }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">{{ $order->created_at->format('d-m-Y')}}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"><span class="bg-pink-500 py-1 px-3 rounded text-white shadow">{{ $order->status }}</span></td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"><span class="bg-green-500 py-1 px-3 rounded text-white shadow">{{ $order->payment_status }}</span></td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">{{{ Number::currency($order->grand_total, 'IDR') }}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      {{ $orders->links() }}
    </div>
  </div>
</div>