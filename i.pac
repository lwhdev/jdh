function FindProxyForURL(url, host)
{
    if (host == "shop.touchtv.com") {
        return "PROXY:192.22.2.90:80";
    }
    
    return "DIRECT";
}
