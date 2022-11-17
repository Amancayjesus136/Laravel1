<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clientes') }}
        </h2>
        <a href="#" class="btn btn-primary registrar">Registrar cliente</a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                <table class="table">
                    <tr>
                        <th>Nombre</th>
                        <th>Appellido</th>
                        <th>Telefono</th>
                        <th>Email</th>
                        <th>Acciones</th>
                    </tr>
                    <tr>
                        <th>Yilian</th>
                        <th>No le pregunte</th>
                        <th>991644788</th>
                        <th>yilian@gmail.com</th>
                        <td>
                            <a href="#" class="btn btn-success">Editar</a>
                            <a href="#" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                    <tr>
                        <th>Valeria</th>
                        <th>Palacios</th>
                        <th>99577844</th>
                        <th>Valeria@gmail.com</th>
                        <td>
                            <a href="#" class="btn btn-success">Editar</a>
                            <a href="#" class="btn btn-danger">Eliminar</a>
                        </td>
                    <tr>
                        <th>Brigithe</th>
                        <th>Jaramillo</th>
                        <th>992455460</th>
                        <th>brigithe@gmail.com</th>
                        <td>
                            <a href="#" class="btn btn-success">Editar</a>
                            <a href="#" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                    <tr>
                        <th>Nicole</th>
                        <th>Cueva</th>
                        <th>932445778</th>
                        <th>nicole@gmail.com</th>
                        <td>
                            <a href="#" class="btn btn-success">Editar</a>
                            <a href="#" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>

                    <tr>
                        <th>Naomi</th>
                        <th>Lorenze</th>
                        <th>932445778</th>
                        <th>naomi@gmail.com</th>
                        <td>
                            <a href="#" class="btn btn-success">Editar</a>
                            <a href="#" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>

                    <tr>
                        <th>Gabriela</th>
                        <th>Razuri</th>
                        <th>932445778</th>
                        <th>gabriela@gmail.com</th>
                        <td>
                            <a href="#" class="btn btn-success">Editar</a>
                            <a href="#" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>

                    <tr>
                        <th>Dayanna</th>
                        <th>Chavez</th>
                        <th>932445778</th>
                        <th>dayanna@gmail.com</th>
                        <td>
                            <a href="#" class="btn btn-success">Editar</a>
                            <a href="#" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>

                    <tr>
                        <th>Andrea</th>
                        <th>Cortez</th>
                        <th>932445778</th>
                        <th>andrea@gmail.com</th>
                        <td>
                            <a href="#" class="btn btn-success">Editar</a>
                            <a href="#" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                </table>



                </div>
            </div>
        </div>
    </div>
</x-app-layout>