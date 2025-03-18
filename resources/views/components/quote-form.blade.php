<div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg max-w-2xl mx-auto">
    <h2 class="text-2xl font-bold mb-6 text-center text-gray-900 dark:text-white">Nhận Báo Giá & Tư Vấn Thuê Xe Limousine</h2>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    <form action="{{ route('quote.store') }}" method="POST" class="space-y-4">
        @csrf
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Thông tin cá nhân -->
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Họ và tên</label>
                <input type="text" name="name" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                <input type="email" name="email" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Số điện thoại</label>
                <input type="tel" name="phone" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Số lượng hành khách</label>
                <input type="number" name="number_of_passengers" min="1" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
            </div>

            <!-- Thông tin chuyến đi -->
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Điểm đón</label>
                <input type="text" name="pickup_location" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Điểm đến</label>
                <input type="text" name="dropoff_location" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Ngày đón</label>
                <input type="date" name="pickup_date" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Giờ đón</label>
                <input type="time" name="pickup_time" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Loại dịch vụ</label>
                <select name="service_type" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    <option value="">Chọn loại dịch vụ</option>
                    <option value="one_way">Một chiều</option>
                    <option value="round_trip">Khứ hồi</option>
                    <option value="hourly">Theo giờ</option>
                </select>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Loại xe</label>
                <select name="vehicle_type" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    <option value="">Chọn loại xe</option>
                    <option value="limousine_9">Limousine 9 chỗ</option>
                    <option value="limousine_16">Limousine 16 chỗ</option>
                    <option value="vip_car">Xe VIP</option>
                </select>
            </div>
        </div>

        <div class="col-span-2">
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Yêu cầu đặc biệt</label>
            <textarea name="special_requirements" rows="3"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"></textarea>
        </div>

        <div class="flex justify-center mt-6">
            <button type="submit"
                class="px-6 py-3 bg-indigo-600 text-white font-medium rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Gửi yêu cầu báo giá
            </button>
        </div>
    </form>
</div> 