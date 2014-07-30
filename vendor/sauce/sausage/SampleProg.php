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
      "type": "verifyTextPresent",
      "text": "SOLUTIONS"
    },
    {
      "type": "clickElement",
      "locator": {
        "type": "link text",
        "value": "SOLUTIONS"
      }
    },
    {
      "type": "clickElement",
      "locator": {
        "type": "xpath",
        "value": "//header/div[1]/div/div[2]"
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
        "type": "link text",
        "value": "COMPANY"
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