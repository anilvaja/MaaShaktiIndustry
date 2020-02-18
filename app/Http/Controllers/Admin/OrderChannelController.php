<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\OrderChannel;
use Illuminate\Http\Request;

class OrderChannelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $orderchannel = OrderChannel::where('title', 'LIKE', "%$keyword%")
                ->orWhere('content', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->orWhere('status', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $orderchannel = OrderChannel::latest()->paginate($perPage);
        }

        return view('admin.order-channel.index', compact('orderchannel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.order-channel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			'title' => 'required|max:50'
		]);
        $requestData = $request->all();
        
        OrderChannel::create($requestData);

        return redirect('admin/order-channel')->with('flash_message', 'OrderChannel added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $orderchannel = OrderChannel::findOrFail($id);

        return view('admin.order-channel.show', compact('orderchannel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $orderchannel = OrderChannel::findOrFail($id);

        return view('admin.order-channel.edit', compact('orderchannel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
			'title' => 'required|max:50'
		]);
        $requestData = $request->all();
        
        $orderchannel = OrderChannel::findOrFail($id);
        $orderchannel->update($requestData);

        return redirect('admin/order-channel')->with('flash_message', 'OrderChannel updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        OrderChannel::destroy($id);

        return redirect('admin/order-channel')->with('flash_message', 'OrderChannel deleted!');
    }
}
