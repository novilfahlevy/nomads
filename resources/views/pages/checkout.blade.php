@extends('layouts.checkout')

@section('title', 'Checkout')

@section('content')
<header class="detail-header"></header>

<main>
  <div class="container">
    <div class="row">
      <div class="col-12 px-0">
        <nav>
          <ol class="breadcrumb p-lg-0 bg-transparent">
            <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Paket Travel</a></li>
            <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Details</a></li>
            <li class="breadcrumb-item active" aria-current="page">Checkout</li>
          </ol>
        </nav>
      </div>
      <div class="col-12 col-lg-8 px-lg-0 mb-3 mb-lg-0">
        <div class="card card-members">
          <h1 class="card-members-title mb-1">Who is Going?</h1>
          <p class="card-members-location">Trip to Ubud, Bali, Indonesia</p>
          <table class="table table-responsive-sm text-center">
            <tr>
              <th class="align-middle">Picture</th>
              <th class="align-middle">Name</th>
              <th class="align-middle">Nationality</th>
              <th class="align-middle">VISA</th>
              <th class="align-middle">Passport</th>
              <th class="align-middle"></th>
            </tr>
            <tr>
              <td class="align-middle">
                <img src="{{ url('frontend/images/anggaphoto.jpg') }}" class="member-avatar" alt="Angga Rizky">
              </td>
              <td class="align-middle">Angga Rizky</td>
              <td class="align-middle">CN</td>
              <td class="align-middle">N/A</td>
              <td class="align-middle">Active</td>
              <td class="align-middle">
                <img src="{{ url('frontend/images/ic_remove.jpg') }}" class="btn-remove-member" alt="Remove Angga Rizky">
              </td>
            </tr>
            <tr>
              <td class="align-middle">
                <img src="{{ url('frontend/images/anggaphoto.jpg') }}" class="member-avatar" alt="Angga Rizky">
              </td>
              <td class="align-middle">Galih Pratama</td>
              <td class="align-middle">SG</td>
              <td class="align-middle">30 Days</td>
              <td class="align-middle">Active</td>
              <td class="align-middle">
                <img src="{{ url('frontend/images/ic_remove.jpg') }}" class="btn-remove-member" alt="Remove Angga Rizky">
              </td>
            </tr>
          </table>
          <div class="add-member">
            <h2 class="add-member-title">Add Member</h2>
            <form action="" class="form-inline">
              <label for="inputUsername" class="sr-only">Name</label>
              <input
                type="text"
                class="form-control mb-2 mr-sm-2"
                id="inputUsername"
                name="name"
                placeholder="Username"
              >
              <label for="inputVisa" class="sr-only">VISA</label>
              <select
                class="form-control mb-2 mr-sm-2"
                id="inputVisa"
                name="visa"
                placeholder="VISA"
              >
                <option value="visa">VISA</option>
              </select>
              <label for="inputDOEPassport" class="sr-only">DOE Passport</label>
              <div class="input-group mb-2 mr-sm-2">
                <input
                  class="form-control datepicker"
                  id="inputDOEPassport"
                  name="DOEPassport"
                  placeholder="DOE Passport"
                >
              </div>
              <button type="submit" class="btn btn-add-now mb-2 px-4">
                Add Now
              </button>
            </form>
            <h3 class="disclaimer-title mt-2 mb-0">Note</h3>
            <p class="disclaimer mb-0">
              You are only able to invite member that has registered in Nomads.
            </p>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-4">
        <div class="card card-checkout">
          <h2 class="card-checkout-title">Checkout Informations</h2>
          <table class="table table-borderless table-responsive-sm">
            <tr>
              <td class="p-0 pb-2">Members</td>
              <td class="text-right p-0 pb-2">2 people</td>
            </tr>
            <tr>
              <td class="p-0 pb-2">Additional VISA</td>
              <td class="text-right p-0 pb-2">$ 190,00</td>
            </tr>
            <tr>
              <td class="p-0 pb-2">Trip Price</td>
              <td class="text-right p-0 pb-2">$ 80.00 / person</td>
            </tr>
            <tr>
              <td class="p-0 pb-2">Sub Total</td>
              <td class="text-right p-0 pb-2">$ 280,00</td>
            </tr>
            <tr>
              <td class="p-0 pb-2">Total (+Unique Code)</td>
              <td class="text-right p-0">
                <span class="total-nominal">$ 279,</span><span class="total-precision">33</span>
              </td>
            </tr>
          </table>
          <hr class="mt-0">
          <h2 class="checkout-payment-title mb-2">Payment Instructions</h2>
          <p class="checkout-information-tip">
            Please complete your payment before to continue the wonderful trip
          </p>
          <div class="row flex-column payment-accounts">
            <div class="payments-account d-flex align-items-start col">
              <img src="{{ url('frontend/images/ic_bank.jpg') }}" class="mr-3">
              <div>
                <p class="mb-0">PT Nomads ID</p>
                <p class="mb-0">0881 8829 8800</p>
                <p class="mb-0">Bank Central Asia</p>
              </div>
            </div>
            <div class="payments-account d-flex align-items-start col">
              <img src="{{ url('frontend/images/ic_bank.jpg') }}" class="mr-3">
              <div>
                <p class="mb-0">PT Nomads ID</p>
                <p class="mb-0">0881 8829 8800</p>
                <p class="mb-0">Bank Central Asia</p>
              </div>
            </div>
          </div>
          <a href="{{ route('checkout-success') }}" class="btn btn-made-payment">I Have Made Payment</a>
        </div>
        <a href="{{ route('detail') }}" class="btn btn-cancel-booking mx-auto mt-3 d-block">
          Cancel Booking
        </a>
      </div>
    </div>
  </div>
</main>
@endsection

@push('append-style')
<link rel="stylesheet" href="{{ url('frontend/libraries/gijgo/css/gijgo.min.css') }}">
<link rel="stylesheet" href="{{ url('frontend/styles/checkout.css') }}">
@endpush

@push('append-script')
<script src="{{ url('frontend/libraries/gijgo/js/gijgo.min.js') }}"></script>
<script>
  $(document).ready(function() {
    $('.datepicker').datepicker({
      uiLibrary: 'bootstrap4',
      icons: {
        rightIcon: '<img src="{{ url("frontend/images/ic_doe.jpg") }}" />'
      }
    });
  });
</script>
@endpush