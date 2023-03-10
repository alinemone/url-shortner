<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => ':attribute باید پذیرفته شده باشد.',
    'active_url'           => 'آدرس :attribute معتبر نیست',
    'after'                => ':attribute باید تاریخی بعد از :date باشد.',
    'after_or_equal'       => ':attribute باید تاریخی بعد از :date، یا مطابق با آن باشد.',
    'alpha'                => ':attribute باید فقط حروف الفبا باشد.',
    'alpha_dash'           => ':attribute باید فقط حروف الفبا، عدد و خط تیره(-) باشد.',
    'alpha_num'            => ':attribute باید فقط حروف الفبا و عدد باشد.',
    'array'                => ':attribute باید آرایه باشد.',
    'before'               => ':attribute باید تاریخی قبل از :date باشد.',
    'before_or_equal'      => ':attribute باید تاریخی قبل از :date، یا مطابق با آن باشد.',
    'between'              => [
        'numeric' => ':attribute باید بین :min و :max باشد.',
        'file'    => ':attribute باید بین :min و :max کیلوبایت باشد.',
        'string'  => ':attribute باید بین :min و :max کاراکتر باشد.',
        'array'   => ':attribute باید بین :min و :max آیتم باشد.',
    ],
    'boolean'              => 'فیلد :attribute فقط می‌تواند صحیح و یا غلط باشد',
    'confirmed'            => ':attribute با فیلد تکرار مطابقت ندارد.',
    'date'                 => ':attribute یک تاریخ معتبر نیست.',
    'date_format'          => ':attribute با الگوی :format مطاقبت ندارد.',
    'different'            => ':attribute و :other باید متفاوت باشند.',
    'digits'               => ':attribute باید :digits رقم باشد.',
    'digits_between'       => ':attribute باید بین :min و :max رقم باشد.',
    'dimensions'           => 'ابعاد تصویر :attribute قابل قبول نیست.',
    'distinct'             => 'فیلد :attribute تکراری است.',
    'email'                => ':attribute باید یک ایمیل معتبر باشد',
    'exists'               => ':attribute انتخاب شده، معتبر نیست.',
    'file'                 => ':attribute باید یک فایل باشد',
    'filled'               => 'فیلد :attribute الزامی است',
    'image'                => ':attribute باید تصویر باشد.',
    'in'                   => ':attribute انتخاب شده، معتبر نیست.',
    'in_array'             => 'فیلد :attribute در :other وجود ندارد.',
    'integer'              => ':attribute باید عدد صحیح باشد.',
    'ip'                   => ':attribute باید IP معتبر باشد.',
    'ipv4'                 => ':attribute باید یک آدرس معتبر از نوع IPv4 باشد.',
    'ipv6'                 => ':attribute باید یک آدرس معتبر از نوع IPv6 باشد.',
    'json'                 => 'فیلد :attribute باید یک رشته از نوع JSON باشد.',
    'max'                  => [
        'numeric' => ':attribute نباید بزرگتر از :max باشد.',
        'card'    => 'حداکثر «:max» عدد از کالای «:attribute» می‌توانید سفارش دهید.',
        'file'    => ':attribute نباید بزرگتر از :max کیلوبایت باشد.',
        'string'  => ':attribute نباید بیشتر از :max کاراکتر باشد.',
        'array'   => ':attribute نباید بیشتر از :max آیتم باشد.',
    ],
    'mimes'                => ':attribute باید یکی از فرمت های :values باشد.',
    'mimetypes'            => ':attribute باید یکی از فرمت های :values باشد.',
    'min'                  => [
        'numeric' => ':attribute نباید کوچکتر از :min باشد.',
        'file'    => ':attribute نباید کوچکتر از :min کیلوبایت باشد.',
        'string'  => ':attribute نباید کمتر از :min کاراکتر باشد.',
        'array'   => ':attribute نباید کمتر از :min آیتم باشد.',
    ],
    'not_in'               => ':attribute انتخاب شده، معتبر نیست.',
    'numeric'              => ':attribute باید عدد باشد.',
    'present'              => 'فیلد :attribute باید در پارامترهای ارسالی وجود داشته باشد.',
    'regex'                => 'فرمت :attribute معتبر نیست',
    'required'             => 'فیلد :attribute الزامی است',
    'required_if'          => 'هنگامی که :other برابر با :value است، فیلد :attribute الزامی است.',
    'required_unless'      => 'فیلد :attribute ضروری است، مگر آنکه :other در :values موجود باشد.',
    'required_with'        => 'در صورت وجود فیلد :values، فیلد :attribute الزامی است.',
    'required_with_all'    => 'در صورت وجود فیلدهای :values، فیلد :attribute الزامی است.',
    'required_without'     => 'در صورت عدم وجود فیلد :values، فیلد :attribute الزامی است.',
    'required_without_all' => 'در صورت عدم وجود هر یک از فیلدهای :values، فیلد :attribute الزامی است.',
    'same'                 => ':attribute و :other باید مانند هم باشند.',
    'size'                 => [
        'numeric' => ':attribute باید برابر با :size باشد.',
        'file'    => ':attribute باید برابر با :size کیلوبایت باشد.',
        'string'  => ':attribute باید برابر با :size کاراکتر باشد.',
        'array'   => ':attribute باید شامل :size آیتم باشد.',
    ],
    'string'               => 'فیلد :attribute باید متن باشد.',
    'timezone'             => 'فیلد :attribute باید یک منطقه زمانی قابل قبول باشد.',
    'unique'               => ':attribute قبلا انتخاب شده است.',
    'uploaded'             => 'آپلود فایل :attribute موفقیت آمیز نبود.',
    'url'                  => 'فرمت آدرس :attribute اشتباه است.',
    'number_list'          => 'فرمت :attribute اشتباه است.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute'  => [
            'enable' => 'صفت :attribute غیر فعال است',
        ],
        'attributes' => 'ساختار :attribute صحیح نیست'
    ],

    'coupon' => [
        'PerUserCouponRule'       => 'تعداد دفعات استفاده از کد تخفیف برای شما به پایان رسیده است.',
        'MaxUsageCouponRule'      => 'تعداد دفعات استفاده از کد تخفیف به پایان رسیده است.',
        'CategoryIdsCouponRule'   => 'کد تخفیف وارد شده در این دسته‌بندی قابل استفاده نیست.',
        'KarIdsCouponRule'        => 'کد تخفیف مورد نظر برای این کار قابل استفاده نیست.',
        'KarbaladIdsCouponRule'   => 'کد تخفیف مورد نظر برای این خرید قابل استفاده نیست.',
        'FirstPurchaseCouponRule' => 'کد وارد شده تنها برای اولین خرید قابل استفاده است.',
        'MinAmountCouponRule'     => 'مبلغ پرداختی کم‌تر از حداقل مبلغ لازم برای استفاده از کد تخفیف است.',
        'OnlyUserCouponRule'      => 'کد تخفیف مورد نظر برای شما قابل استفاده نیست.',
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'skills'          => 'مهارت',
        'category_id'     => 'شناسه دسته بندی',
        'attributes'      => 'ویژگی های کار',
        'scopes'          => 'نحوه کار',
        'kar_id'          => 'شناسه کار',
        'quantity'        => 'تعداد سفارش',
        'sefaresh_id'     => 'شماره سفارش',
        'price'           => 'قیمت',
        'description'     => 'توضیحات',
        'is_published'    => 'منتشر شده',
        'bio'             => 'درباره من',
        'certificates'    => 'گواهینامه ها',
        'order_subject'   => 'موضوع سفارش',
        'quality_rate'    => 'میزان رضایت',
        'on_time_rate'    => 'میزان خوش قولی',
        'suggestion_rate' => 'دعوت از دوستان',
        'nickname'        => 'شهرت',
        'title'           => 'عنوان',
        'id'              => 'شناسه',
        'salamyarId'      => 'شناسه سلام یار',
        'sheba_number'    => 'شماره شبا',
        'sheba_owner'     => 'صاحب حساب',
        'amount'          => 'قیمت',
        'ids'             => 'شناسه',
        'start_at'        => 'تاریخ شروع',
        'expired_at'      => 'تاریخ انقضا',
        'coupon'          => 'کوپن'
    ],

];
