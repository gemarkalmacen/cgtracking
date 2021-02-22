<input type="hidden" id="notification"
    value='{!! json_encode(
        array_merge(
            ($errors->any()) ? [["type" => "error", "message" => implode("<br/>", array_unique($errors->all()))]] : [], //form validation
            (session()->get("notification") ?? [])
        )
    ) !!}'>