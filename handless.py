# -*- encoding: utf-8 -*-
import sys
reload(sys)
sys.setdefaultencoding('utf8')

# here put the import lib
from selenium import webdriver
from selenium.webdriver.common.by import By  # 获取元素
from selenium.webdriver.support.ui import WebDriverWait  # 设置获取元素超时时间，如果获取失败则抛出异常
from selenium.webdriver.support import expected_conditions as EC  # 获取元素
from selenium.webdriver.common.keys import Keys  # 输入键盘值
from selenium.common.exceptions import TimeoutException  # 超时获取元素报错原因
import time  # 设置延迟

# 添加无界面参数
#options = webdriver.ChromeOptions()
#options.add_argument('--headless')
#browser = webdriver.Chrome(options=options)
browser = webdriver.Chrome()
##打开google浏览器

url = "http://39.99.234.254/bots/tp2.php"
#url = "http://39.99.234.254/bots/tp4.php"

def one_loop(idx,url):
    url_withid = url+"?id=%d"%idx
    browser.get(url_withid)
    wait = WebDriverWait(browser, 10)  # 设置获取元素的超时时间为10s
    #time.sleep(1)  # 等待完成加载
    htmlcode = str(browser.page_source)
    return htmlcode

def main():
    for i in range(3000):
        #print("check page %d" % i)
        htmlcode = one_loop(i,url)
        if "flag" in htmlcode:
            #print(htmlcode)
            exit(0)

if __name__ == '__main__':
    main()

