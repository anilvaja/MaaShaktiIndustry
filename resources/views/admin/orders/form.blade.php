<div class="form-group {{ $errors->has('order_type') ? 'has-error' : ''}}">
    <label for="order_type" class="control-label">{{ 'Order Type' }}</label>
    <input class="form-control" name="order_type" type="number" id="order_type" value="{{ isset($order->order_type) ? $order->order_type : ''}}" >
    {!! $errors->first('order_type', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('company_id') ? 'has-error' : ''}}">
    <label for="company_id" class="control-label">{{ 'Company Id' }}</label>
    <input class="form-control" name="company_id" type="number" id="company_id" value="{{ isset($order->company_id) ? $order->company_id : ''}}" >
    {!! $errors->first('company_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('weight') ? 'has-error' : ''}}">
    <label for="weight" class="control-label">{{ 'Weight' }}</label>
    <input class="form-control" name="weight" type="number" id="weight" value="{{ isset($order->weight) ? $order->weight : ''}}" >
    {!! $errors->first('weight', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('quantity') ? 'has-error' : ''}}">
    <label for="quantity" class="control-label">{{ 'Quantity' }}</label>
    <input class="form-control" name="quantity" type="number" id="quantity" value="{{ isset($order->quantity) ? $order->quantity : ''}}" >
    {!! $errors->first('quantity', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('expected_delivery_date') ? 'has-error' : ''}}">
    <label for="expected_delivery_date" class="control-label">{{ 'Expected Delivery Date' }}</label>
    <input class="form-control" name="expected_delivery_date" type="datetime-local" id="expected_delivery_date" value="{{ isset($order->expected_delivery_date) ? $order->expected_delivery_date : ''}}" >
    {!! $errors->first('expected_delivery_date', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('work_order_no') ? 'has-error' : ''}}">
    <label for="work_order_no" class="control-label">{{ 'Work Order No' }}</label>
    <textarea class="form-control" rows="5" name="work_order_no" type="textarea" id="work_order_no" >{{ isset($order->work_order_no) ? $order->work_order_no : ''}}</textarea>
    {!! $errors->first('work_order_no', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('purchase_order_date') ? 'has-error' : ''}}">
    <label for="purchase_order_date" class="control-label">{{ 'Purchase Order Date' }}</label>
    <input class="form-control" name="purchase_order_date" type="datetime-local" id="purchase_order_date" value="{{ isset($order->purchase_order_date) ? $order->purchase_order_date : ''}}" >
    {!! $errors->first('purchase_order_date', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('purchase_order_number') ? 'has-error' : ''}}">
    <label for="purchase_order_number" class="control-label">{{ 'Purchase Order Number' }}</label>
    <input class="form-control" name="purchase_order_number" type="text" id="purchase_order_number" value="{{ isset($order->purchase_order_number) ? $order->purchase_order_number : ''}}" >
    {!! $errors->first('purchase_order_number', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('price') ? 'has-error' : ''}}">
    <label for="price" class="control-label">{{ 'Price' }}</label>
    <input class="form-control" name="price" type="number" id="price" value="{{ isset($order->price) ? $order->price : ''}}" >
    {!! $errors->first('price', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($order->user_id) ? $order->user_id : ''}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
    <label for="status" class="control-label">{{ 'Status' }}</label>
    <select name="status" class="form-control" id="status" >
    @foreach (json_decode('{"0":"InActive","1":"Active"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($order->status) && $order->status == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
