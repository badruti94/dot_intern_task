# Dokumentasi

## Provinsi
### url
``` http://127.0.0.1:8000/provinsi ```
### parameter
q | wajib | untuk memberikan keyword

### contoh
**request**
```
	http://127.0.0.1:8000/provinsi?q=jawa
```
**response**
```
	{
	    "keyword": "jawa",
	    "kategori": "provinsi",
	    "data": [
	        "Jawa Barat",
	        "Jawa Tengah",
	        "Jawa Timur"
	    ]
	}
```

## Kota
### url
``` http://127.0.0.1:8000/kota ```
### parameter
q | wajib | untuk memberikan keyword

### contoh
**request**
```
	http://127.0.0.1:8000/kota?q=jakarta
```
**response**
```
	{
	    "keyword": "jakarta",
	    "kategori": "kota",
	    "data": [
			        {
			            "province": "DKI Jakarta",
			            "city": "Jakarta Barat",
			            "type": "Kota",
			            "postal_code": "11220"
			        },
			        {
			            "province": "DKI Jakarta",
			            "city": "Jakarta Pusat",
			            "type": "Kota",
			            "postal_code": "10540"
			        },
			        {
			            "province": "DKI Jakarta",
			            "city": "Jakarta Selatan",
			            "type": "Kota",
			            "postal_code": "12230"
			        },
			        {
			            "province": "DKI Jakarta",
			            "city": "Jakarta Timur",
			            "type": "Kota",
			            "postal_code": "13330"
			        },
			        {
			            "province": "DKI Jakarta",
			            "city": "Jakarta Utara",
			            "type": "Kota",
			            "postal_code": "14140"
			        }
	    		]
	}
```



Made by Laravel
