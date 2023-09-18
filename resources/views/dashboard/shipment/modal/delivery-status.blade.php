

<!-- Modal -->

<!-- Modal -->
<div class="modal fade" id="changeStatusModal" tabindex="-1" role="dialog" aria-labelledby="changeStatusModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="changeStatusModalLabel">Change Status</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @if(isset($shipment)) <!-- Check if $shipment is set -->
                    <form action="{{ route('dashboard.shipment.update.delivery_status', $shipment->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="delivery_status">New Status</label>
                            <select id="delivery_status" name="delivery_status" class="form-control">
                                @foreach ($statusOptions as $statusValue => $statusLabel)
                                    <option value="{{ $statusValue }}">
                                        {{ $statusLabel }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Update Status</button>
                    </form>
                @else
                    <p>No shipment data available.</p>
                @endif
            </div>
        </div>
    </div>
</div>

