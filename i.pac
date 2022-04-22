function FindProxyForURL(url, host)
{
    if (host == "shop.touchtv.com") {
        return "PROXY";
    }
    
    return "DIRECT";
}
