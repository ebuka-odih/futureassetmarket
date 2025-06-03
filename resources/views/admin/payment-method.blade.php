@extends('admin.layout.app')
@section('content')

    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">

                    <div class="nk-block">
                        <div class="row g-3 mb-3">
                            <div class="col-lg-12">
                                <div class="card card-bordered card-preview">
                                    <div class="card-inner">
                                        <h4 class="m-3">Payment Method</h4>

                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#modalForm">Add Payment Method
                                        </button>
                                        <div class="m-3">
                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                            @if(session()->has('success'))
                                                <div class="alert alert-success">
                                                    {{ session()->get('success') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div id="DataTables_Table_0_wrapper"
                                             class="dataTables_wrapper dt-bootstrap4 no-footer">

                                            <div class="datatable-wrap my-3">
                                                <div class="table-responsive">
                                                    <table
                                                        class="datatable-init nowrap table dataTable no-footer dtr-inline"
                                                        id="DataTables_Table_0"
                                                        aria-describedby="DataTables_Table_0_info">
                                                        <thead>
                                                        <tr>
                                                            <th class="sorting sorting_asc" tabindex="0"
                                                                aria-controls="DataTables_Table_0" rowspan="1"
                                                                colspan="1"
                                                                aria-sort="ascending"
                                                                aria-label="Name: activate to sort column descending">
                                                                Icon
                                                            </th>
                                                            <th class="sorting" tabindex="0"
                                                                aria-controls="DataTables_Table_0" rowspan="1"
                                                                colspan="1"
                                                                aria-label="Position: activate to sort column ascending"
                                                                style="">Wallet Name
                                                            </th>
                                                            <th class="sorting" tabindex="0"
                                                                aria-controls="DataTables_Table_0" rowspan="1"
                                                                colspan="1"
                                                                aria-label="Office: activate to sort column ascending"
                                                                style="">Wallet Address
                                                            </th>
                                                            <th class="sorting" tabindex="0"
                                                                aria-controls="DataTables_Table_0" rowspan="1"
                                                                colspan="1"
                                                                aria-label="Salary: activate to sort column ascending"
                                                                style="text-align: right">Action
                                                            </th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($wallet_data as $item)
                                                            <tr class="even">
                                                                <td class="" style="">
                                                                    <img src="{{ $item->avatar() }}"
                                                                         alt="{{ $item->name }}"
                                                                         style="height: 30px; width: 30px; border-radius: 50%;">

                                                                </td>
                                                                <td class="">{{ $item->name }}</td>
                                                                <td class="">{{ $item->value }}</td>
                                                                <td class="">
                                                                    <ul class="nk-tb-actions gx-1">

                                                                        <li><a href="#" class="btn btn-sm btn-primary"
                                                                               data-bs-toggle="modal"
                                                                               data-bs-target="#modalForm-{{ $item->id }}">
                                                                                <em class="icon ni ni-edit"></em></a>
                                                                        </li>
                                                                        <li><a href="#" class="btn btn-sm btn-danger"
                                                                               data-bs-toggle="modal"
                                                                               data-bs-target="#deleteModal-{{ $item->id }}">
                                                                                <em class="icon ni ni-trash"></em>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </td>
                                                            </tr>

                                                        @endforeach

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                        </div>

                                        <!-- Move modals outside the table -->
                                        @foreach($wallet_data as $item)
                                            <!-- Edit Modal -->
                                            <div class="modal fade" id="modalForm-{{ $item->id }}">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Payment Wallet</h5>
                                                            <a href="#" class="close" data-bs-dismiss="modal"
                                                               aria-label="Close">
                                                                <em class="icon ni ni-cross"></em>
                                                            </a>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form
                                                                action="{{ route('admin.payment-method.update', $item->id) }}"
                                                                method="POST" class="form-validate is-alter"
                                                                enctype="multipart/form-data">
                                                                @csrf
                                                                @method('PATCH')
                                                                <div class="form-group">
                                                                    <label class="form-label" for="full-name">Wallet
                                                                        Name</label>
                                                                    <div class="form-control-wrap">
                                                                        <select name="name" class="form-control">
                                                                            @foreach($wallets as $asset)
                                                                                <option
                                                                                    value="{{ $asset }}">{{ $asset }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="form-label" for="email-address">Wallet
                                                                        Address</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" name="value"
                                                                               value="{{ old('value', $item->value ?? '') }}"
                                                                               class="form-control" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <button type="submit"
                                                                            class="btn btn-lg btn-primary">Save
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Delete Confirmation Modal -->
                                            <div class="modal fade" id="deleteModal-{{ $item->id }}" tabindex="-1"
                                                 aria-labelledby="deleteModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="deleteModalLabel">Confirm
                                                                Delete</h5>
                                                            <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Are you sure you want to delete this record? This action
                                                            cannot be undone.
                                                        </div>
                                                        <div class="modal-footer">
                                                            <form
                                                                action="{{ route('admin.payment-method.destroy', $item->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Cancel
                                                                </button>
                                                                <button type="submit" class="btn btn-danger">Delete
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="col-lg-12">
                                <div class="card card-bordered card-preview">
                                    <div class="card-inner">
                                        <h4 class="m-3">Bank Details</h4>

                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#modalFormBank">Add Bank Details
                                        </button>
                                        <div class="m-3">
                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                            @if(session()->has('success'))
                                                <div class="alert alert-success">
                                                    {{ session()->get('success') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-bordered mb-4">
                                                <thead>
                                                <tr>
                                                    <th>Bank Name</th>
                                                    <th>Account No</th>
                                                    <th>Account Name</th>
                                                    <th>Routing</th>
                                                    <th>SWIFT Code</th>
                                                    <th>Bank Address</th>
                                                    <th>Wire Instruction</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($bank as $paymentMethod)
                                                    <tr>
                                                        <td>{{ $paymentMethod->bank['name'] ?? 'N/A' }}</td>
                                                        <td>{{ $paymentMethod->bank['acct_num'] ?? 'N/A' }}</td>
                                                        <td>{{ $paymentMethod->bank['acct_name'] ?? 'N/A' }}</td>
                                                        <td>{{ $paymentMethod->bank['routing'] ?? 'N/A' }}</td>
                                                        <td>{{ $paymentMethod->bank['swift_code'] ?? 'N/A' }}</td>
                                                        <td>{{ $paymentMethod->bank['bank_address'] ?? 'N/A' }}</td>
                                                        <td>{{ $paymentMethod->bank['wire_instruction'] ?? 'N/A' }}</td>
                                                        <td>
                                                            <a href="#" class="btn btn-sm btn-primary"
                                                               data-bs-toggle="modal"
                                                               data-bs-target="#modalBankForm-{{ $paymentMethod->id }}">
                                                                Edit
                                                            </a>
                                                            <a href="#" class="btn btn-sm btn-danger"
                                                               data-bs-toggle="modal"
                                                               data-bs-target="#deleteModal-{{ $paymentMethod->id }}">
                                                                Delete
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>


                                        </div>


                                        <!-- Move modals outside the table -->
                                        @foreach($bank as $item)
                                            <!-- Edit Modal -->
                                            <div class="modal fade" id="modalBankForm-{{ $item->id }}">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Edit Bank Details</h5>
                                                            <a href="#" class="close" data-bs-dismiss="modal"
                                                               aria-label="Close">
                                                                <em class="icon ni ni-cross"></em>
                                                            </a>
                                                        </div>

                                                        <div class="modal-body">
                                                            <form action="{{ route('admin.updateBankDetails', $item->id) }}"
                                                                  method="POST" class="form-validate is-alter"
                                                                  enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="form-group">
                                                                    <label class="form-label"
                                                                           for="full-name">User</label>
                                                                    <div class="form-control-wrap">
                                                                        <select name="user_id" class="form-control">
                                                                            @foreach($users as $user)
                                                                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="form-label" for="email-address">Bank
                                                                        Name</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" name="bank[name]"
                                                                               class="form-control"
                                                                               value="{{ old('bank.name', $item->bank['name'] ?? '') }}">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="form-label" for="email-address">Account
                                                                        No</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" name="bank[acct_num]"
                                                                               class="form-control"
                                                                               value="{{ old('bank.acct_num', $item->bank['acct_num'] ?? '') }}"
                                                                               required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="form-label" for="email-address">Account
                                                                        Name</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" name="bank[acct_name]"
                                                                               class="form-control"
                                                                               value="{{ old('bank.acct_name', $item['bank']['acct_name'] ?? '') }}"
                                                                               id="email-address">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="form-label" for="email-address">Routing
                                                                        No</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" name="bank[routing]"
                                                                               class="form-control"
                                                                               value="{{ old('bank.routing', $item['bank']['routing'] ?? '') }}"
                                                                               id="email-address">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="form-label" for="email-address">Swift
                                                                        Code</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" name="bank[swift_code]"
                                                                               class="form-control"
                                                                               value="{{ old('bank.swift_code', $item['bank']['swift_code'] ?? '') }}"
                                                                               id="email-address">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="form-label">Bank Address</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" name="bank[bank_address]"
                                                                               class="form-control"
                                                                               value="{{ old('bank.bank_address', $item->bank_address ?? '') }}">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="form-label">Wire Transfer
                                                                        Instruction</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" name="bank[wire_instruction]"
                                                                               class="form-control"
                                                                               value="{{ old('bank.wire_instruction', $item->wire_instruction ?? '') }}">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <button type="submit"
                                                                            class="btn btn-lg btn-primary">Update
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Delete Confirmation Modal -->
                                            <div class="modal fade" id="deleteModal-{{ $item->id }}" tabindex="-1"
                                                 aria-labelledby="deleteModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="deleteModalLabel">Confirm
                                                                Delete</h5>
                                                            <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Are you sure you want to delete this record? This action
                                                            cannot be undone.
                                                        </div>
                                                        <div class="modal-footer">
                                                            <form
                                                                action="{{ route('admin.payment-method.destroy', $item->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Cancel
                                                                </button>
                                                                <button type="submit" class="btn btn-danger">Delete
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalForm">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Payment Wallet</h5>
                    <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <em class="icon ni ni-cross"></em>
                    </a>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.payment-method.store') }}" method="POST"
                          class="form-validate is-alter" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="form-label" for="full-name">Wallet Name</label>
                            <div class="form-control-wrap">
                                <select name="name" class="form-control">
                                    @foreach($wallets as $asset)
                                        <option value="{{ $asset }}">{{ $asset }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="email-address">Wallet Address</label>
                            <div class="form-control-wrap">
                                <input type="text" name="value" class="form-control" id="email-address" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-primary">Save</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="modalFormBank">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Bank Details</h5>
                    <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <em class="icon ni ni-cross"></em>
                    </a>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.storeBankDetails') }}" method="POST" class="form-validate is-alter"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="form-label" for="full-name">User</label>
                            <div class="form-control-wrap">
                                <select name="user_id" class="form-control">
                                    @foreach($users as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="email-address">Bank Name</label>
                            <div class="form-control-wrap">
                                <input type="text" name="bank[name]" class="form-control" id="email-address" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="email-address">Account No</label>
                            <div class="form-control-wrap">
                                <input type="text" name="bank[acct_num]" class="form-control" id="email-address"
                                       required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="email-address">Account Name</label>
                            <div class="form-control-wrap">
                                <input type="text" name="bank[acct_name]" class="form-control" id="email-address"
                                       required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="email-address">Routing No</label>
                            <div class="form-control-wrap">
                                <input type="text" name="bank[routing]" class="form-control" id="email-address">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="email-address">Swift Code</label>
                            <div class="form-control-wrap">
                                <input type="text" name="bank[swift_code]" class="form-control" id="email-address">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Bank Address</label>
                            <div class="form-control-wrap">
                                <input type="text" name="bank[bank_address]" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Wire Transfer Instruction</label>
                            <div class="form-control-wrap">
                                <input type="text" name="bank[wire_instruction]" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-primary">Save</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection
