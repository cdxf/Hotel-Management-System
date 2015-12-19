@extends('layout')
@section('content')

   <h1 class="text-light">{{ $title }} <span class="mif-drive-eta place-right"></span></h1>
                <hr class="thin bg-grayLighter">
                <button class="button primary" onclick="pushMessage('info')"><span class="mif-plus"></span> Create...</button>
                <button class="button success" onclick="pushMessage('success')"><span class="mif-play"></span> Start</button>
                <button class="button warning" onclick="pushMessage('warning')"><span class="mif-loop2"></span> Restart</button>
                <button class="button alert" onclick="pushMessage('alert')">Stop all machines</button>
                <hr class="thin bg-grayLighter">
                <table class="dataTable border bordered" data-role="datatable" data-auto-width="false">
                    <thead>
                    <tr>
                        <td style="width: 20px">
                        </td>
                        <td class="sortable-column sort-asc" style="width: 100px">ID</td>
                        <td class="sortable-column">Machine name</td>
                        <td class="sortable-column">Address</td>
                        <td class="sortable-column" style="width: 20px">Status</td>
                        <td style="width: 20px">Switch</td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <label class="input-control checkbox small-check no-margin">
                                <input type="checkbox">
                                <span class="check"></span>
                            </label>
                        </td>
                        <td>123890723212</td>
                        <td>Machine number 1</td>
                        <td><a href="http://virtuals.com/machines/123890723212">link</a></td>
                        <td class="align-center"><span class="mif-checkmark fg-green"></span></td>
                        <td>
                            <label class="switch-original">
                                <input type="checkbox" checked>
                                <span class="check"></span>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="input-control checkbox small-check no-margin">
                                <input type="checkbox">
                                <span class="check"></span>
                            </label>
                        </td>
                        <td>123890723212</td>
                        <td>Machine number 2</td>
                        <td><a href="http://virtuals.com/machines/123890723212">link</a></td>
                        <td class="align-center"><span class="mif-stop fg-red"></span></td>
                        <td>
                            <label class="switch-original">
                                <input type="checkbox">
                                <span class="check"></span>
                            </label>
                        </td>
                    </tr>
                    </tbody>
                </table>
    @endsection