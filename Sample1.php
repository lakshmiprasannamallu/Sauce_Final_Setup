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
      "text": "Our marketing experts will deliver growth for your business"
    },
    {
      "type": "verifyTextPresent",
      "text": "Marketing Automation"
    },
    {
      "type": "verifyTextPresent",
      "text": "Regardless of your lead database size, Position2 can help you set up a marketing automation service that’s in sync with your overall sales and marketing objectives."
    },
    {
      "type": "verifyTextPresent",
      "text": "Enterprise Visibility Accelerator"
    },
    {
      "type": "verifyTextPresent",
      "text": "Increase your brand visibility by 40x. Position2 repurposes your existing digital assets, search optimizes and publishes them across online and social channels."
    }
  ],
  "data": {
    "configs": {},
    "source": "none"
  },
  "inputs": [],
  "timeoutSeconds": 60
}