@extends('layouts.app')

@if($user->usertype=="teacher")

    @include('teacher.dashboard')

@elseif($user->usertype=="student")

    @include('student.dashboard')

@endif


