@extends('layouts.app')

@section('title', 'Detail Anggota')

@section('content')
    <h1>Detail Anggota</h1>
    <p><a href="{{ route('members.index') }}">&larr; Kembali ke daftar anggota</a></p>

    <div style="border: 1px solid #ccc; padding: 20px; border-radius: 4px; max-width: 500px;">
        <p><strong>ID:</strong> {{ $member->id }}</p>
        <p><strong>Nama:</strong> {{ $member->nama }}</p>
        <p><strong>NIM:</strong> {{ $member->nim }}</p>
        <p><strong>Email:</strong> {{ $member->email }}</p>
        <p><strong>Nomor Telepon:</strong> {{ $member->nomor_telepon ?? '-' }}</p>
        <p><strong>Alamat:</strong> {{ $member->alamat ?? '-' }}</p>
        <p><strong>Status:</strong> 
            <span style="padding: 2px 8px; border-radius: 4px; color: #fff; background: {{ $member->status == 'aktif' ? '#059669' : '#dc2626' }};">
                {{ ucfirst($member->status) }}
            </span>
        </p>
    </div>

    <div style="margin-top: 16px;">
        <a href="{{ route('members.edit', $member->id) }}" class="btn">Edit Anggota</a>
    </div>
@endsection