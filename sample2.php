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
      "type": "verifyTextPresent",
      "text": "Customer behavior is changing. 72% of online US adults use social networking sites, up from 67% in 2012. Your customers visit forums, watch videos and check with friends and peers before they buy."
    },
    {
      "type": "verifyTextPresent",
      "text": "Package your content better: you’ve invested a lot of resources in coming up with content in the form of white paper; but how many people have the time to read pages of printed content? By adapting this"
    },
    {
      "type": "verifyTextPresent",
      "text": "Social is a must have for Search Engine Optimization (SEO): in the wake of search going social and with changing consumer behavior, SEO as we know it, needs to evolve."
    },
    {
      "type": "clickElement",
      "locator": {
        "type": "xpath",
        "value": "//div[@class='field-items']/div/p[2]"
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