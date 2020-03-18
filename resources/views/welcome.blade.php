@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

{{--        <data-table--}}
{{--            fetch-url="{{ route('users.table') }}"--}}
{{--            :columns="['name', 'address','needs', 'created_at']"--}}
{{--        ></data-table>--}}

{{--        <server-datasource--}}
{{--            :source="items"--}}
{{--            :total="total_of_items"--}}
{{--            :columns="columns"--}}
{{--            :actions="actions"></server-datasource>--}}

        <v-app>
            <data-table></data-table>
        </v-app>
    </div>
@endsection
