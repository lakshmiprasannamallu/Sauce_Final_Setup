{
  "type": "script",
  "seleniumVersion": "2",
  "formatVersion": 2,
  "steps": [
    {
      "type": "get",
      "url": "http://www.position2.com/"
    },
    {
      "type": "clickElement",
      "locator": {
        "type": "css selector",
        "value": "img[alt=\"Position Square | Growth Delivered\"]"
      }
    },
    {
      "type": "clickElement",
      "locator": {
        "type": "xpath",
        "value": "//header[@class='navbar-fixed-top']/div[1]/div/div[2]/div[2]/div/div/div/ul/li[1]/a"
      }
    },
    {
      "type": "clickElement",
      "locator": {
        "type": "link text",
        "value": "RESOURCES"
      }
    },
    {
      "type": "clickElement",
      "locator": {
        "type": "xpath",
        "value": "//header/div[1]/div/div[2]/div[2]/div/div/div/ul/li[4]/a"
      }
    }
  ],
  "data": {
    "configs": {},
    "source": "none"
  },
  "inputs": [],
  "timeoutSeconds": 60
}