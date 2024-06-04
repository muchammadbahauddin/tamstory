<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LANDINGPAGE</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=BenchNine:wght@300;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand+SC&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Palanquin+Dark:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Palanquin:wght@100;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Palanquin', sans-serif;
        }

        .container {
            max-width: 1440px;
            margin: 0 auto;
        }

        /* Style for image modal */
        #imageModal {
            z-index: 999;
        }

        #imageModal .bg-white {
            width: 300px;
        }

        @media (min-width: 768px) {
            #imageModal .bg-white {
                width: 400px;
            }
        }

        /* Hover effect */
        .customer-card {
            transition: transform 0.3s ease-in-out;
        }

        .customer-card:hover {
            transform: scale(1.05);
        }
    </style>
</head>

<body class="bg-black text-white">
    <div class="container p-4">
        <header class="bg-black p-2">
            <img class="w-40 h-auto" src="{{ asset('images/logoal.png') }}" />
        </header>
        <main>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <nav class="bg-white bg-opacity-20 backdrop-blur-lg p-6 rounded-2xl shadow-2xl">
                    <h2 class="text-xl font-bold mb-4">MAIN MENU</h2>
                    <ul>
                        <li class="mb-2"><a href="#" class="text-lg text-white">Data Customer Baru</a></li>
                        <li class="mb-2"><a href="#" class="text-lg text-white">Logout</a></li>
                        <li class="mb-2"><a href="#" class="text-lg text-white">Create Foto</a></li>
                    </ul>
                </nav>
                <section class="col-span-2 bg-white bg-opacity-20 backdrop-blur-lg p-6 rounded-2xl shadow-2xl">
                    <h1 class="text-4xl font-bold mb-6">Data Customer</h1>
                    <div id="customer-list">
                        <!-- Customer Items will be inserted here dynamically -->
                    </div>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded mt-4" onclick="createCustomer()">Add Customer</button>
                </section>
            </div>
        </main>
        <footer class="bg-yellow-400 p-4 mt-4 text-center">
            <p class="font-bold">TAM STORY 2024</p>
        </footer>
    </div>

    <!-- Modal for image upload -->
    <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-50 hidden justify-center items-center">
        <div class="bg-white p-4 rounded-lg shadow-lg">
            <h2 class="text-xl mb-4">Upload Image</h2>
            <input type="file" id="imageInput" accept="image/*" class="mb-4">
            <div class="flex justify-end">
                <button class="bg-gray-500 text-white px-4 py-2 rounded mr-2" onclick="closeImageModal()">Cancel</button>
                <button class="bg-blue-500 text-white px-4 py-2 rounded" onclick="saveImage()">Upload</button>
            </div>
        </div>
    </div>

    <script>
        // Mock data for customers
        const customers = [
            {
                name: 'Callista',
                email: 'callistaputri@gmail.com',
                phone: '082248514924',
                type: 'Wedding Photography',
                address: 'Jl. Anggur No. 3, Kec. Dau, Kab. Malang',
                description: 'Wedding dengan tema outdoor',
                image: ''
            },
            {
                name: 'Komang',
                email: 'komangputra@gmail.com',
                phone: '08923890987',
                type: 'Graduation Photography',
                address: 'Jl. Adikarya No. 3, Kec. Kepanjen, Kab. Malang',
                image: ''
            },
            {
                name: 'Michel Rachman',
                email: 'michelsangar@gmail.com',
                phone: '086789009876',
                type: 'Product Photography',
                address: 'Jl. Kebonjeruk No. 3, Kec. Pakisaji, Kab. Malang',
                image: ''
            }
        ];

        function renderCustomers() {
            const customerList = document.getElementById('customer-list');
            customerList.innerHTML = ''; // Clear the list first
            customers.forEach((customer, index) => {
                customerList.innerHTML += `
                <div class="customer-card bg-white p-4 mb-4 rounded-lg shadow-md text-black">
                    <h3 class="text-xl font-bold">${customer.name}</h3>
                    <p>Email: ${customer.email}</p>
                    <p>Phone: ${customer.phone}</p>
                    <p>Type: ${customer.type}</p>
                    <p>Address: ${customer.address}</p>
                    <p>Description: ${customer.description}</p>
                    ${customer.image ? `<img src="${customer.image}" alt="${customer.name}" class="mt-2 mb-2 rounded-lg">` : ''}
                    <div class="flex space-x-2 mt-2">
                        <button class="bg-blue-500 text-white px-2 py-1 rounded" onclick="editCustomer(${index})">EDIT</button>
                        <button class="bg-red-500 text-white px-2 py-1 rounded" onclick="deleteCustomer(${index})">DELETE</button>
                        <button class="bg-green-500 text-white px-2 py-1 rounded" onclick="openImageModal(${index})">UPLOAD IMAGE</button>
                    </div>
                </div>`;
            });
        }

        function createCustomer() {
            const newCustomer = {
                name: 'New Customer',
                email: 'newcustomer@gmail.com',
                phone: '08123456789',
                type: 'New Type',
                address: 'New Address',
                description: 'New Description',
                image: ''
            };
            customers.push(newCustomer);
            renderCustomers();
        }

        function editCustomer(index) {
            const customer = customers[index];
            const newName = prompt('Enter new name:', customer.name);
            if (newName) {
                customer.name = newName;
                const newAddress = prompt('Enter new address:', customer.address);
                if (newAddress) {
                    customer.address = newAddress;
                    const newPhone = prompt('Enter new phone number:', customer.phone);
                    if (newPhone) {
                        customer.phone = newPhone;
                        renderCustomers();
                    }
                }
            }
        }

        function deleteCustomer(index) {
            if (confirm('Are you sure you want to delete this customer?')) {
                customers.splice(index, 1);
                renderCustomers();
            }
        }

        let currentCustomerIndex = null;

        function openImageModal(index) {
            currentCustomerIndex = index;
            document.getElementById('imageModal').classList.remove('hidden');
        }

        function closeImageModal() {
            document.getElementById('imageModal').classList.add('hidden');
        }

        function saveImage() {
            const fileInput = document.getElementById('imageInput');
            if (fileInput.files.length > 0) {
                const file = fileInput.files[0];
                const reader = new FileReader();
                reader.onload = function (e) {
                    customers[currentCustomerIndex].image = e.target.result;
                    renderCustomers();
                    closeImageModal();
                }
                reader.readAsDataURL(file);
            }
        }

        document.addEventListener('DOMContentLoaded', renderCustomers);
    </script>
</body>

</html>
