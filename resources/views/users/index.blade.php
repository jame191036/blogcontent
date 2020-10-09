@extends('layouts.app')
@section('content')

    <div class="card card-default">
        <div class="card-header">
            user
        </div>
        <div class="catd-body">
            @if ($users->count() > 0)
            <table class="table table-hover mb-0">
                <thead>
                    <th>Name</th>
                    <th>Email </th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @if (!$user->isAdmin())
                                <button type="button" class="btn btn-primary btn-sm">Make Admin</button>
                                @else
                                    <p> admin </p>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
        </div>
    </div>

@endsection
